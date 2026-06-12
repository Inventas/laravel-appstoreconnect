<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\MarketplaceWebhooks;

use Inventas\AppStoreConnectKit\Api\Dto\MarketplaceWebhookCreateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * marketplaceWebhooks_createInstance
 */
class MarketplaceWebhooksCreateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/v1/marketplaceWebhooks';
    }

    public function __construct(
        protected MarketplaceWebhookCreateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
