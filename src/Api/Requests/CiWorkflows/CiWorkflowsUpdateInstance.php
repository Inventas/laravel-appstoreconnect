<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\CiWorkflows;

use Inventas\AppStoreConnectKit\Api\Dto\CiWorkflowUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * ciWorkflows_updateInstance
 */
class CiWorkflowsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/ciWorkflows/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected CiWorkflowUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
