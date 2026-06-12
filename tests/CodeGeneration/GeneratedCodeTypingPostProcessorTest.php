<?php

use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Data\Generator\GeneratedCode;
use Crescat\SaloonSdkGenerator\Data\Generator\Method;
use Crescat\SaloonSdkGenerator\Data\Generator\Parameter;
use Inventas\AppStoreConnectKit\CodeGeneration\OpenApi\OpenApiParameterDocTypeMap;
use Inventas\AppStoreConnectKit\CodeGeneration\OpenApi\OpenApiRequestBodyTypeMap;
use Inventas\AppStoreConnectKit\CodeGeneration\PostProcessors\GeneratedCodeTypingPostProcessor;
use Nette\PhpGenerator\PhpFile;

it('writes spec-derived phpdoc for generated endpoint parameters', function () {
    $fixture = generatedParameterTypingFixture('array');

    try {
        (new GeneratedCodeTypingPostProcessor($fixture['map']))->process(
            $fixture['config'],
            $fixture['specification'],
            new GeneratedCode(requestClasses: [$fixture['file']]),
        );

        $code = (string) $fixture['file'];

        expect($code)->toContain('@param array<int, string> $filterbuild')
            ->and($code)->toContain('@var array<int, string>');
    } finally {
        unlink($fixture['openApiFile']);
    }
});

it('fails when generated endpoint native types do not match the OpenAPI schema', function () {
    $fixture = generatedParameterTypingFixture('string');

    try {
        (new GeneratedCodeTypingPostProcessor($fixture['map']))->process(
            $fixture['config'],
            $fixture['specification'],
            new GeneratedCode(requestClasses: [$fixture['file']]),
        );
    } finally {
        unlink($fixture['openApiFile']);
    }
})->throws(RuntimeException::class, 'expected [array] from the OpenAPI schema');

it('preserves false and zero values in generated required default query arrays', function () {
    $fixture = generatedParameterTypingFixture('bool', parameterSchema: ['type' => 'boolean']);

    try {
        $class = $fixture['file']->getClasses()['TestNamespace\Requests\BetaAppReviewSubmissions\BetaAppReviewSubmissionsGetCollection'];
        $class->addMethod('defaultQuery')
            ->setReturnType('array')
            ->setBody("return array_filter(['filter[build]' => \$this->filterbuild]);");

        (new GeneratedCodeTypingPostProcessor($fixture['map']))->process(
            $fixture['config'],
            $fixture['specification'],
            new GeneratedCode(requestClasses: [$fixture['file']]),
        );

        expect((string) $fixture['file'])->toContain("return ['filter[build]' => \$this->filterbuild];")
            ->not()->toContain('return array_filter(');
    } finally {
        unlink($fixture['openApiFile']);
    }
});

it('preserves false and zero values while removing nulls in generated optional default query arrays', function () {
    $fixture = generatedParameterTypingFixture(
        'bool',
        parameterSchema: ['type' => 'boolean'],
        parameterRequired: false,
    );

    try {
        $class = $fixture['file']->getClasses()['TestNamespace\Requests\BetaAppReviewSubmissions\BetaAppReviewSubmissionsGetCollection'];
        $class->addMethod('defaultQuery')
            ->setReturnType('array')
            ->setBody("return array_filter(['filter[build]' => \$this->filterbuild]);");

        (new GeneratedCodeTypingPostProcessor($fixture['map']))->process(
            $fixture['config'],
            $fixture['specification'],
            new GeneratedCode(requestClasses: [$fixture['file']]),
        );

        expect((string) $fixture['file'])->toContain('static fn (mixed $value): bool => $value !== null');
    } finally {
        unlink($fixture['openApiFile']);
    }
});

it('serializes typed request body dtos directly as json payloads', function () {
    $fixture = generatedBodyTypingFixture();

    try {
        (new GeneratedCodeTypingPostProcessor($fixture['map']))->process(
            $fixture['config'],
            $fixture['specification'],
            new GeneratedCode(requestClasses: [$fixture['file']]),
        );

        $code = (string) $fixture['file'];

        expect($code)->toContain('@param \TestNamespace\Dto\AccessibilityDeclarationCreateRequest $payload')
            ->and($code)->toContain('use Saloon\Contracts\Body\HasBody;')
            ->and($code)->toContain('use Saloon\Traits\Body\HasJsonBody;')
            ->and($code)->toContain('implements HasBody')
            ->and($code)->toContain('use HasJsonBody;')
            ->and($code)->toContain('use Inventas\AppStoreConnectKit\Support\PayloadSerializer;')
            ->and($code)->toContain('return PayloadSerializer::serialize($this->payload);');
    } finally {
        unlink($fixture['openApiFile']);
    }
});

/**
 * @return array{
 *     config: Config,
 *     specification: ApiSpecification,
 *     map: OpenApiParameterDocTypeMap,
 *     file: PhpFile,
 *     openApiFile: string
 * }
 */
function generatedParameterTypingFixture(
    string $nativeType,
    array $parameterSchema = ['type' => 'array', 'items' => ['type' => 'string']],
    bool $parameterRequired = true,
): array {
    $openApiFile = tempnam(sys_get_temp_dir(), 'openapi-postprocessor').'.json';

    file_put_contents($openApiFile, json_encode([
        'paths' => [
            '/v1/betaAppReviewSubmissions' => [
                'get' => [
                    'operationId' => 'betaAppReviewSubmissions_getCollection',
                    'tags' => ['BetaAppReviewSubmissions'],
                    'parameters' => [
                        [
                            'name' => 'filter[build]',
                            'in' => 'query',
                            'required' => $parameterRequired,
                            'schema' => $parameterSchema,
                        ],
                    ],
                ],
            ],
        ],
    ], JSON_THROW_ON_ERROR));

    $config = new Config(
        connectorName: 'AppStoreConnect',
        namespace: 'TestNamespace',
    );
    $specification = new ApiSpecification(
        name: 'Fixture',
        description: null,
        baseUrl: null,
        endpoints: [
            new Endpoint(
                name: 'betaAppReviewSubmissions_getCollection',
                method: Method::GET,
                pathSegments: ['v1', 'betaAppReviewSubmissions'],
                collection: 'BetaAppReviewSubmissions',
                response: null,
                queryParameters: [new Parameter($nativeType, ! $parameterRequired, 'filter[build]')],
            ),
        ],
    );

    $file = new PhpFile;
    $namespace = $file->addNamespace('TestNamespace\Requests\BetaAppReviewSubmissions');
    $class = $namespace->addClass('BetaAppReviewSubmissionsGetCollection');
    $constructor = $class->addMethod('__construct');
    $constructor->setComment('@param array $filterbuild');
    $constructor->addPromotedParameter('filterbuild')
        ->setPublic()
        ->setType($nativeType)
        ->setNullable(! $parameterRequired);

    if (! $parameterRequired) {
        $constructor->getParameters()['filterbuild']->setDefaultValue(null);
    }

    return [
        'config' => $config,
        'specification' => $specification,
        'map' => OpenApiParameterDocTypeMap::fromFile($openApiFile, $config, $specification),
        'file' => $file,
        'openApiFile' => $openApiFile,
    ];
}

/**
 * @return array{
 *     config: Config,
 *     specification: ApiSpecification,
 *     map: OpenApiParameterDocTypeMap,
 *     file: PhpFile,
 *     openApiFile: string
 * }
 */
function generatedBodyTypingFixture(): array
{
    $openApiFile = tempnam(sys_get_temp_dir(), 'openapi-body-postprocessor').'.json';

    file_put_contents($openApiFile, json_encode([
        'paths' => [
            '/v1/accessibilityDeclarations' => [
                'post' => [
                    'operationId' => 'accessibilityDeclarations_createInstance',
                    'tags' => ['AccessibilityDeclarations'],
                    'requestBody' => [
                        'description' => 'AccessibilityDeclaration representation',
                        'required' => true,
                        'content' => [
                            'application/json' => [
                                'schema' => [
                                    '$ref' => '#/components/schemas/AccessibilityDeclarationCreateRequest',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ], JSON_THROW_ON_ERROR));

    $config = new Config(
        connectorName: 'AppStoreConnect',
        namespace: 'TestNamespace',
    );
    $requestBodyTypes = OpenApiRequestBodyTypeMap::fromFile($openApiFile, $config);
    $specification = new ApiSpecification(
        name: 'Fixture',
        description: null,
        baseUrl: null,
        endpoints: [
            new Endpoint(
                name: 'accessibilityDeclarations_createInstance',
                method: Method::POST,
                pathSegments: ['v1', 'accessibilityDeclarations'],
                collection: 'AccessibilityDeclarations',
                response: null,
                bodyParameters: [
                    new Parameter('\TestNamespace\Dto\AccessibilityDeclarationCreateRequest', false, 'payload'),
                ],
            ),
        ],
    );

    $file = new PhpFile;
    $namespace = $file->addNamespace('TestNamespace\Requests\AccessibilityDeclarations');
    $class = $namespace->addClass('AccessibilityDeclarationsCreateInstance');
    $constructor = $class->addMethod('__construct');
    $constructor->addPromotedParameter('payload')
        ->setProtected()
        ->setType('\TestNamespace\Dto\AccessibilityDeclarationCreateRequest');
    $class->addMethod('defaultBody')
        ->setReturnType('array')
        ->setBody("return array_filter(['payload' => \$this->payload]);");

    return [
        'config' => $config,
        'specification' => $specification,
        'map' => OpenApiParameterDocTypeMap::fromFile($openApiFile, $config, $specification, $requestBodyTypes),
        'file' => $file,
        'openApiFile' => $openApiFile,
    ];
}
