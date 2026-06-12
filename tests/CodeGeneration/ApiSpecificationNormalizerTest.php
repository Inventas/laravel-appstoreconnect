<?php

use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Data\Generator\Method;
use Crescat\SaloonSdkGenerator\Data\Generator\Parameter;
use Inventas\AppStoreConnectKit\CodeGeneration\OpenApi\ApiSpecificationNormalizer;
use Inventas\AppStoreConnectKit\CodeGeneration\OpenApi\OpenApiRequestBodyTypeMap;

it('orders required parameters before optional parameters without changing requiredness', function () {
    $specification = new ApiSpecification(
        name: 'Fixture',
        description: null,
        baseUrl: null,
        endpoints: [
            new Endpoint(
                name: 'listApps',
                method: Method::GET,
                pathSegments: ['v1', 'apps'],
                collection: 'Apps',
                response: null,
                queryParameters: [
                    new Parameter('array', true, 'include'),
                    new Parameter('array', false, 'filter[build]'),
                ],
            ),
        ],
    );

    (new ApiSpecificationNormalizer)->normalize($specification);

    expect($specification->endpoints[0]->queryParameters[0]->name)->toBe('filter[build]')
        ->and($specification->endpoints[0]->queryParameters[0]->nullable)->toBeFalse()
        ->and($specification->endpoints[0]->queryParameters[1]->name)->toBe('include')
        ->and($specification->endpoints[0]->queryParameters[1]->nullable)->toBeTrue();
});

it('adds typed request body parameters from OpenAPI request bodies', function () {
    $openApiFile = tempnam(sys_get_temp_dir(), 'openapi-body-map').'.json';

    file_put_contents($openApiFile, json_encode([
        'paths' => [
            '/v1/accessibilityDeclarations' => [
                'post' => [
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
            ),
        ],
    );

    try {
        (new ApiSpecificationNormalizer(
            OpenApiRequestBodyTypeMap::fromFile($openApiFile, config: new Crescat\SaloonSdkGenerator\Data\Generator\Config(
                connectorName: 'AppStoreConnect',
                namespace: 'TestNamespace',
            )),
        ))->normalize($specification);

        expect($specification->endpoints[0]->bodyParameters)->toHaveCount(1)
            ->and($specification->endpoints[0]->bodyParameters[0]->name)->toBe('payload')
            ->and($specification->endpoints[0]->bodyParameters[0]->type)->toBe('\TestNamespace\Dto\AccessibilityDeclarationCreateRequest')
            ->and($specification->endpoints[0]->bodyParameters[0]->nullable)->toBeFalse();
    } finally {
        unlink($openApiFile);
    }
});
