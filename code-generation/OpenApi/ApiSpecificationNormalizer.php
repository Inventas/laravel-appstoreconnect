<?php

namespace Inventas\AppStoreConnectKit\CodeGeneration\OpenApi;

use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Data\Generator\Parameter;

class ApiSpecificationNormalizer
{
    public function __construct(
        private readonly ?OpenApiRequestBodyTypeMap $requestBodyTypes = null,
    ) {}

    public function normalize(ApiSpecification $specification): ApiSpecification
    {
        foreach ($specification->endpoints as $endpoint) {
            $this->addRequestBodyParameter($endpoint);

            $endpoint->pathParameters = $this->requiredFirst($endpoint->pathParameters);
            $endpoint->bodyParameters = $this->requiredFirst($endpoint->bodyParameters);
            $endpoint->queryParameters = $this->requiredFirst($endpoint->queryParameters);
            $endpoint->headerParameters = $this->requiredFirst($endpoint->headerParameters);
        }

        return $specification;
    }

    private function addRequestBodyParameter(Endpoint $endpoint): void
    {
        if ($this->requestBodyTypes === null) {
            return;
        }

        $bodyType = $this->requestBodyTypes->get($endpoint);

        if ($bodyType === null) {
            return;
        }

        $endpoint->bodyParameters = [
            new Parameter(
                type: $bodyType['nativeType'],
                nullable: $bodyType['nullable'],
                name: 'payload',
                description: $bodyType['description'],
            ),
        ];
    }

    /**
     * @template T of object
     *
     * @param  list<T>  $parameters
     * @return list<T>
     */
    private function requiredFirst(array $parameters): array
    {
        usort(
            $parameters,
            fn (object $left, object $right): int => ($left->nullable <=> $right->nullable),
        );

        return $parameters;
    }
}
