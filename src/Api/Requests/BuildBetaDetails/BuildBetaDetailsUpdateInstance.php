<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\BuildBetaDetails;

use Inventas\AppStoreConnectKit\Api\Dto\BuildBetaDetailUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * buildBetaDetails_updateInstance
 */
class BuildBetaDetailsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/buildBetaDetails/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected BuildBetaDetailUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
