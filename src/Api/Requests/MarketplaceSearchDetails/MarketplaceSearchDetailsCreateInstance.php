<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\MarketplaceSearchDetails;

use Inventas\AppStoreConnectKit\Api\Dto\MarketplaceSearchDetailCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * marketplaceSearchDetails_createInstance
 */
class MarketplaceSearchDetailsCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/marketplaceSearchDetails';
    }

    public function __construct(
        protected MarketplaceSearchDetailCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
