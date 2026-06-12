<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\MarketplaceSearchDetails;

use Inventas\AppStoreConnectKit\Api\Dto\MarketplaceSearchDetailUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * marketplaceSearchDetails_updateInstance
 */
class MarketplaceSearchDetailsUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/marketplaceSearchDetails/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected MarketplaceSearchDetailUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
