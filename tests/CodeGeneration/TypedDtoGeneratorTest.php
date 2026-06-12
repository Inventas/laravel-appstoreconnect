<?php

use cebe\openapi\spec\Schema;
use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Data\Generator\BaseUrl;
use Crescat\SaloonSdkGenerator\Data\Generator\Components;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Inventas\AppStoreConnectKit\CodeGeneration\Generators\TypedDtoGenerator;
use Nette\PhpGenerator\PhpFile;

it('generates nested dto classes for apple-style resource attributes and relationships', function () {
    $files = generateTypedDtoFixture();

    expect($files)->toHaveKey('App')
        ->and($files)->toHaveKey('AppAttributes')
        ->and($files)->toHaveKey('AppRelationships')
        ->and($files)->toHaveKey('Platform')
        ->and($files)->not->toHaveKey('Csv');

    $app = (string) $files['App'];
    $appAttributes = (string) $files['AppAttributes'];

    expect($app)->toContain('public string $type,')
        ->and($app)->toContain('public string $id,')
        ->and($app)->toContain('public AppAttributes|Optional $attributes = new Optional')
        ->and($app)->toContain('public AppRelationships|Optional $relationships = new Optional')
        ->and($appAttributes)->toContain('public Platform|Optional $platform = new Optional');
});

it('generates backed enums for string enum schemas', function () {
    $files = generateTypedDtoFixture();
    $platform = (string) $files['Platform'];
    $external = (string) $files['ExternalEnum'];

    expect($platform)->toContain('enum Platform: string')
        ->and($platform)->toContain("case IOS = 'IOS';")
        ->and($platform)->toContain("case MAC_OS = 'MAC_OS';")
        ->and($external)->toContain("case VALUE_1ST_VALUE = '1st-value';")
        ->and($external)->toContain("case VALUE_1ST_VALUE_2 = '1st value';");
});

it('generates union phpdoc for apple-style included arrays', function () {
    $files = generateTypedDtoFixture();
    $response = (string) $files['AppResponse'];

    expect($response)->toContain('@param array<int, Build|BetaGroup>|Optional $included')
        ->and($response)->toContain('@var array<int, Build|BetaGroup>|Optional')
        ->and($response)->toContain('public array|Optional $included = new Optional');
});

it('generates required properties without defaults and optional nullable properties as optional', function () {
    $files = generateTypedDtoFixture();
    $request = (string) $files['CreateRequest'];

    expect($request)->toContain('@param CreateRequestData $data')
        ->and($request)->toContain('public CreateRequestData $data,')
        ->and($request)->toContain('@param string|null $requiredNullable')
        ->and($request)->toContain('public string|null $requiredNullable,')
        ->and($request)->toContain('@param string|Optional $optionalName')
        ->and($request)->toContain('public string|Optional $optionalName = new Optional')
        ->and($request)->toContain('@param string|Optional|null $optionalNullable')
        ->and($request)->toContain('public string|Optional|null $optionalNullable = new Optional');
});

/**
 * @return array<string, PhpFile>
 */
function generateTypedDtoFixture(): array
{
    $generator = new TypedDtoGenerator(new Config(
        connectorName: 'AppStoreConnect',
        namespace: 'TestNamespace',
    ));

    return $generator->generate(new ApiSpecification(
        name: 'App Store Connect',
        description: null,
        baseUrl: new BaseUrl('https://api.appstoreconnect.apple.com'),
        components: new Components([
            'AppResponse' => new Schema([
                'type' => 'object',
                'properties' => [
                    'data' => ['$ref' => '#/components/schemas/App'],
                    'included' => [
                        'type' => 'array',
                        'items' => [
                            'oneOf' => [
                                ['$ref' => '#/components/schemas/Build'],
                                ['$ref' => '#/components/schemas/BetaGroup'],
                            ],
                        ],
                    ],
                    'links' => ['$ref' => '#/components/schemas/DocumentLinks'],
                ],
                'required' => ['data'],
            ]),
            'App' => new Schema([
                'type' => 'object',
                'properties' => [
                    'type' => ['type' => 'string'],
                    'id' => ['type' => 'string'],
                    'attributes' => [
                        'type' => 'object',
                        'properties' => [
                            'name' => ['type' => 'string'],
                            'bundleId' => ['type' => 'string'],
                            'platform' => ['$ref' => '#/components/schemas/Platform'],
                        ],
                    ],
                    'relationships' => [
                        'type' => 'object',
                        'properties' => [
                            'betaGroups' => [
                                'type' => 'object',
                                'properties' => [
                                    'links' => ['$ref' => '#/components/schemas/RelationshipLinks'],
                                ],
                            ],
                        ],
                    ],
                ],
                'required' => ['type', 'id'],
            ]),
            'Build' => new Schema(['type' => 'object', 'properties' => ['id' => ['type' => 'string']]]),
            'BetaGroup' => new Schema(['type' => 'object', 'properties' => ['id' => ['type' => 'string']]]),
            'CreateRequest' => new Schema([
                'type' => 'object',
                'properties' => [
                    'optionalName' => ['type' => 'string'],
                    'data' => ['$ref' => '#/components/schemas/CreateRequestData'],
                    'optionalNullable' => ['type' => 'string', 'nullable' => true],
                    'requiredNullable' => ['type' => 'string', 'nullable' => true],
                ],
                'required' => ['data', 'requiredNullable'],
            ]),
            'CreateRequestData' => new Schema([
                'type' => 'object',
                'properties' => [
                    'type' => ['type' => 'string'],
                ],
                'required' => ['type'],
            ]),
            'Csv' => new Schema(['type' => 'string']),
            'DocumentLinks' => new Schema(['type' => 'object', 'properties' => ['self' => ['type' => 'string']]]),
            'ExternalEnum' => new Schema(['type' => 'string', 'enum' => ['1st-value', '1st value']]),
            'Platform' => new Schema(['type' => 'string', 'enum' => ['IOS', 'MAC_OS']]),
            'RelationshipLinks' => new Schema(['type' => 'object', 'properties' => ['related' => ['type' => 'string']]]),
        ]),
    ));
}
