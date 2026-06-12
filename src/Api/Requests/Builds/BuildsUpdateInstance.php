<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\Builds;

use Inventas\AppStoreConnectKit\Api\Dto\BuildUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * builds_updateInstance
 */
class BuildsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/builds/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected BuildUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
