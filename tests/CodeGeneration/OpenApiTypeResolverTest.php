<?php

use cebe\openapi\spec\Reference;
use cebe\openapi\spec\Schema;
use Inventas\AppStoreConnectKit\CodeGeneration\OpenApi\OpenApiTypeResolver;

it('resolves scalar schema types', function () {
    $resolver = new OpenApiTypeResolver;

    expect($resolver->resolve(new Schema(['type' => 'string']), 'App', 'name')->docType)->toBe('string')
        ->and($resolver->resolve(new Schema(['type' => 'integer']), 'App', 'count')->nativeType)->toBe('int')
        ->and($resolver->resolve(new Schema(['type' => 'boolean']), 'App', 'enabled')->nativeType)->toBe('bool');
});

it('resolves nullable doc types without changing native types', function () {
    $resolver = new OpenApiTypeResolver;
    $resolved = $resolver->resolve(new Schema(['type' => 'string']), 'App', 'name');

    expect($resolved->nativeType)->toBe('string')
        ->and($resolved->nullableDocType())->toBe('string|null');
});

it('resolves references to dto class names', function () {
    $resolver = new OpenApiTypeResolver;
    $resolved = $resolver->resolve(new Reference(['$ref' => '#/components/schemas/App']), 'AppResponse', 'data');

    expect($resolved->nativeType)->toBe('App')
        ->and($resolved->docType)->toBe('App');
});

it('resolves referenced string enum schemas as enum class names', function () {
    $resolver = new OpenApiTypeResolver([
        'Platform' => new Schema([
            'type' => 'string',
            'enum' => ['IOS', 'MAC_OS'],
        ]),
    ]);

    $resolved = $resolver->resolve(new Reference(['$ref' => '#/components/schemas/Platform']), 'AppStoreVersionCreateRequestDataAttributes', 'platform');

    expect($resolved->nativeType)->toBe('Platform')
        ->and($resolved->docType)->toBe('Platform');
});

it('resolves referenced primitive non enum schemas as scalar types', function () {
    $resolver = new OpenApiTypeResolver([
        'Csv' => new Schema([
            'type' => 'string',
        ]),
    ]);

    $resolved = $resolver->resolve(new Reference(['$ref' => '#/components/schemas/Csv']), 'ReportRequest', 'format');

    expect($resolved->nativeType)->toBe('string')
        ->and($resolved->docType)->toBe('string');
});

it('resolves inline objects as nested dto schemas', function () {
    $resolver = new OpenApiTypeResolver;
    $resolved = $resolver->resolve(new Schema([
        'type' => 'object',
        'properties' => [
            'name' => ['type' => 'string'],
        ],
    ]), 'App', 'attributes');

    expect($resolved->nativeType)->toBe('AppAttributes')
        ->and($resolved->docType)->toBe('AppAttributes')
        ->and($resolved->nestedSchemas)->toHaveKey('AppAttributes');
});

it('resolves arrays with typed items', function () {
    $resolver = new OpenApiTypeResolver;

    $stringArray = $resolver->resolve(new Schema([
        'type' => 'array',
        'items' => ['type' => 'string'],
    ]), 'App', 'tags');

    $refArray = $resolver->resolve(new Schema([
        'type' => 'array',
        'items' => ['$ref' => '#/components/schemas/App'],
    ]), 'AppsResponse', 'data');

    expect($stringArray->docType)->toBe('array<int, string>')
        ->and($refArray->docType)->toBe('array<int, App>');
});

it('resolves maps with typed additional properties', function () {
    $resolver = new OpenApiTypeResolver;
    $resolved = $resolver->resolve(new Schema([
        'type' => 'object',
        'additionalProperties' => ['type' => 'string'],
    ]), 'App', 'metadata');

    expect($resolved->nativeType)->toBe('array')
        ->and($resolved->docType)->toBe('array<string, string>');
});

it('resolves oneOf array items as phpdoc unions', function () {
    $resolver = new OpenApiTypeResolver;
    $resolved = $resolver->resolve(new Schema([
        'type' => 'array',
        'items' => [
            'oneOf' => [
                ['$ref' => '#/components/schemas/App'],
                ['$ref' => '#/components/schemas/Build'],
            ],
        ],
    ]), 'AppResponse', 'included');

    expect($resolved->nativeType)->toBe('array')
        ->and($resolved->docType)->toBe('array<int, App|Build>');
});
