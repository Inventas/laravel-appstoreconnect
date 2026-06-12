<?php

use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Data\Generator\Method;
use Crescat\SaloonSdkGenerator\Data\Generator\Parameter;
use Inventas\AppStoreConnectKit\CodeGeneration\OpenApi\OpenApiParameterDocTypeMap;

it('maps generated request and resource array parameter docs from the OpenAPI schema', function () {
    $file = tempnam(sys_get_temp_dir(), 'openapi-parameter-map').'.json';

    file_put_contents($file, json_encode([
        'paths' => [
            '/v1/betaAppReviewSubmissions' => [
                'get' => [
                    'operationId' => 'betaAppReviewSubmissions_getCollection',
                    'tags' => ['BetaAppReviewSubmissions'],
                    'parameters' => [
                        [
                            'name' => 'filter[build]',
                            'in' => 'query',
                            'required' => true,
                            'schema' => [
                                'type' => 'array',
                                'items' => ['type' => 'string'],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ], JSON_THROW_ON_ERROR));

    try {
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
                    queryParameters: [new Parameter('array', false, 'filter[build]')],
                ),
            ],
        );

        $map = OpenApiParameterDocTypeMap::fromFile($file, $config, $specification);

        expect($map->get(
            'TestNamespace\Requests\BetaAppReviewSubmissions\BetaAppReviewSubmissionsGetCollection',
            '__construct',
            'filterbuild',
        ))->toBe('array<int, string>')
            ->and($map->get(
                'TestNamespace\Resource\BetaAppReviewSubmissions',
                'betaAppReviewSubmissionsGetCollection',
                'filterbuild',
            ))->toBe('array<int, string>');
    } finally {
        unlink($file);
    }
});
