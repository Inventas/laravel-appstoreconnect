<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\MarketplaceWebhookCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\MarketplaceWebhookUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\MarketplaceWebhooks\MarketplaceWebhooksCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\MarketplaceWebhooks\MarketplaceWebhooksDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\MarketplaceWebhooks\MarketplaceWebhooksGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\MarketplaceWebhooks\MarketplaceWebhooksUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class MarketplaceWebhooks extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsmarketplaceWebhooks
     */
    public function marketplaceWebhooksGetCollection(
        ?array $fieldsmarketplaceWebhooks = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new MarketplaceWebhooksGetCollection($fieldsmarketplaceWebhooks, $limit));
    }

    public function marketplaceWebhooksCreateInstance(
        MarketplaceWebhookCreateRequest $payload,
    ): Response {
        return $this->connector->send(new MarketplaceWebhooksCreateInstance($payload));
    }

    public function marketplaceWebhooksDeleteInstance(string $id): Response
    {
        return $this->connector->send(new MarketplaceWebhooksDeleteInstance($id));
    }

    public function marketplaceWebhooksUpdateInstance(
        string $id,
        MarketplaceWebhookUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new MarketplaceWebhooksUpdateInstance($id, $payload));
    }
}
