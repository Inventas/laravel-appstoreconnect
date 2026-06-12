<?php

use Crescat\SaloonSdkGenerator\CodeGenerator;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Factory;
use Inventas\AppStoreConnectKit\CodeGeneration\GeneratedCodeWriter;
use Inventas\AppStoreConnectKit\CodeGeneration\Generators\TypedDtoGenerator;
use Inventas\AppStoreConnectKit\CodeGeneration\OpenApi\ApiSpecificationNormalizer;
use Inventas\AppStoreConnectKit\CodeGeneration\OpenApi\OpenApiParameterDocTypeMap;
use Inventas\AppStoreConnectKit\CodeGeneration\OpenApi\OpenApiRequestBodyTypeMap;
use Inventas\AppStoreConnectKit\CodeGeneration\PostProcessors\GeneratedCodeTypingPostProcessor;
use Inventas\AppStoreConnectKit\CodeGeneration\Validation\GeneratedDtoTypeValidator;

error_reporting(E_ALL & ~E_DEPRECATED);

require __DIR__.'/../vendor/autoload.php';

$root = dirname(__DIR__);
$dryRun = in_array('--dry', $argv, true);
$namespace = 'Inventas\\AppStoreConnectKit\\Api';
$output = 'src/Api';

$config = new Config(
    connectorName: 'AppStoreConnect',
    namespace: $namespace,
    resourceNamespaceSuffix: 'Resource',
    requestNamespaceSuffix: 'Requests',
    dtoNamespaceSuffix: 'Dto',
    ignoredQueryParams: [
        'after',
        'order_by',
        'per_page',
    ],
);

$specification = Factory::parse('openapi', $root.'/openapi.oas.json');
$requestBodyTypes = OpenApiRequestBodyTypeMap::fromFile($root.'/openapi.oas.json', $config);
$specification = (new ApiSpecificationNormalizer($requestBodyTypes))->normalize($specification);
$parameterDocTypes = OpenApiParameterDocTypeMap::fromFile($root.'/openapi.oas.json', $config, $specification, $requestBodyTypes);

$generator = new CodeGenerator(
    config: $config,
    dtoGenerator: new TypedDtoGenerator($config),
    postProcessors: [
        new GeneratedCodeTypingPostProcessor($parameterDocTypes),
    ],
);

$generatedCode = $generator->run($specification);
(new GeneratedDtoTypeValidator($config))->validate($specification, $generatedCode);
$writer = new GeneratedCodeWriter($root, $output, $namespace);

if ($dryRun) {
    foreach ($writer->list($generatedCode) as $file) {
        echo $file.PHP_EOL;
    }

    exit(0);
}

$writer->cleanOutput();
$writer->write($generatedCode);
