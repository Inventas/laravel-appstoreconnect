<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows;

use Inventas\AppStoreConnectKit\Api\Dto\CiWorkflowCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * ciWorkflows_createInstance
 */
class CiWorkflowsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/ciWorkflows';
    }

    public function __construct(
        protected CiWorkflowCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
