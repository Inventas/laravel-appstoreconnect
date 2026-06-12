<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\MarketplaceSearchDetailCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\MarketplaceSearchDetailUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\MarketplaceSearchDetails\MarketplaceSearchDetailsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\MarketplaceSearchDetails\MarketplaceSearchDetailsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\MarketplaceSearchDetails\MarketplaceSearchDetailsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class MarketplaceSearchDetails extends BaseResource
{
    public function marketplaceSearchDetailsCreateInstance(
        MarketplaceSearchDetailCreateRequest $payload,
    ): Response {
        return $this->connector->send(new MarketplaceSearchDetailsCreateInstance($payload));
    }

    public function marketplaceSearchDetailsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new MarketplaceSearchDetailsDeleteInstance($id));
    }

    public function marketplaceSearchDetailsUpdateInstance(
        string $id,
        MarketplaceSearchDetailUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new MarketplaceSearchDetailsUpdateInstance($id, $payload));
    }
}
