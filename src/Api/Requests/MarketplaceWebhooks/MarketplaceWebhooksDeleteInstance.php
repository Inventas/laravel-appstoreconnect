<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\MarketplaceWebhooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * marketplaceWebhooks_deleteInstance
 */
class MarketplaceWebhooksDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/marketplaceWebhooks/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
