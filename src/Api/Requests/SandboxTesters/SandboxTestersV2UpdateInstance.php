<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\SandboxTesters;

use Inventas\AppStoreConnectKit\Api\Dto\SandboxTesterV2updateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * sandboxTestersV2_updateInstance
 */
class SandboxTestersV2UpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v2/sandboxTesters/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected SandboxTesterV2updateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
