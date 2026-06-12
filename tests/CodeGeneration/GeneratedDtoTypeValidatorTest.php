<?php

use cebe\openapi\spec\Schema;
use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Data\Generator\BaseUrl;
use Crescat\SaloonSdkGenerator\Data\Generator\Components;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\GeneratedCode;
use Inventas\AppStoreConnectKit\CodeGeneration\Generators\TypedDtoGenerator;
use Inventas\AppStoreConnectKit\CodeGeneration\Validation\GeneratedDtoTypeValidator;

it('fails when generated dto native types do not match the OpenAPI schema', function () {
    $config = new Config(
        connectorName: 'AppStoreConnect',
        namespace: 'TestNamespace',
    );
    $specification = new ApiSpecification(
        name: 'Fixture',
        description: null,
        baseUrl: new BaseUrl('https://example.com'),
        components: new Components([
            'App' => new Schema([
                'type' => 'object',
                'properties' => [
                    'name' => ['type' => 'string'],
                ],
            ]),
        ]),
    );
    $files = (new TypedDtoGenerator($config))->generate($specification);
    $app = $files['App']->getClasses()['TestNamespace\Dto\App'];
    $app->getMethods()['__construct']->getParameters()['name']->setType('int');

    (new GeneratedDtoTypeValidator($config))->validate(
        $specification,
        new GeneratedCode(dtoClasses: $files),
    );
})->throws(RuntimeException::class, 'does not match OpenAPI type');

it('validates generated enum cases against OpenAPI string enum schemas', function () {
    $config = new Config(
        connectorName: 'AppStoreConnect',
        namespace: 'TestNamespace',
    );
    $specification = new ApiSpecification(
        name: 'Fixture',
        description: null,
        baseUrl: new BaseUrl('https://example.com'),
        components: new Components([
            'App' => new Schema([
                'type' => 'object',
                'properties' => [
                    'platform' => ['$ref' => '#/components/schemas/Platform'],
                ],
                'required' => ['platform'],
            ]),
            'Platform' => new Schema([
                'type' => 'string',
                'enum' => ['IOS', 'MAC_OS'],
            ]),
        ]),
    );
    $files = (new TypedDtoGenerator($config))->generate($specification);

    (new GeneratedDtoTypeValidator($config))->validate(
        $specification,
        new GeneratedCode(dtoClasses: $files),
    );

    expect($files)->toHaveKey('Platform')
        ->and($files['App']->getClasses()['TestNamespace\Dto\App']->getMethods()['__construct']->getParameters()['platform']->getType())->toBe('TestNamespace\Dto\Platform');
});

it('fails when generated enum values do not match the OpenAPI schema', function () {
    $config = new Config(
        connectorName: 'AppStoreConnect',
        namespace: 'TestNamespace',
    );
    $specification = new ApiSpecification(
        name: 'Fixture',
        description: null,
        baseUrl: new BaseUrl('https://example.com'),
        components: new Components([
            'Platform' => new Schema([
                'type' => 'string',
                'enum' => ['IOS', 'MAC_OS'],
            ]),
        ]),
    );
    $files = (new TypedDtoGenerator($config))->generate($specification);
    $files['Platform']->getClasses()['TestNamespace\Dto\Platform']->getCases()['IOS']->setValue('BROKEN');

    (new GeneratedDtoTypeValidator($config))->validate(
        $specification,
        new GeneratedCode(dtoClasses: $files),
    );
})->throws(RuntimeException::class, 'does not match OpenAPI value');

it('skips primitive non enum component schemas while validating generated dtos', function () {
    $config = new Config(
        connectorName: 'AppStoreConnect',
        namespace: 'TestNamespace',
    );
    $specification = new ApiSpecification(
        name: 'Fixture',
        description: null,
        baseUrl: new BaseUrl('https://example.com'),
        components: new Components([
            'Csv' => new Schema([
                'type' => 'string',
            ]),
        ]),
    );
    $files = (new TypedDtoGenerator($config))->generate($specification);

    (new GeneratedDtoTypeValidator($config))->validate(
        $specification,
        new GeneratedCode(dtoClasses: $files),
    );

    expect($files)->not->toHaveKey('Csv');
});
