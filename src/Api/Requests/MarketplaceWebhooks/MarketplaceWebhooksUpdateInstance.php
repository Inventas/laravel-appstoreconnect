<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\MarketplaceWebhooks;

use Inventas\AppStoreConnectKit\Api\Dto\MarketplaceWebhookUpdateRequest;
use Inventas\AppStoreConnectKit\Support\PayloadSerializer;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * marketplaceWebhooks_updateInstance
 */
class MarketplaceWebhooksUpdateInstance extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function resolveEndpoint(): string
    {
        return "/v1/marketplaceWebhooks/{$this->id}";
    }

    public function __construct(
        protected string $id,
        protected MarketplaceWebhookUpdateRequest $payload,
    ) {}

    /**
     * @return array<string, mixed>
     */
    public function defaultBody(): array
    {
        return PayloadSerializer::serialize($this->payload);
    }
}
