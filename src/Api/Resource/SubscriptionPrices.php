<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionPriceCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPrices\SubscriptionPricesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPrices\SubscriptionPricesDeleteInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionPrices extends BaseResource
{
    public function subscriptionPricesCreateInstance(
        SubscriptionPriceCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionPricesCreateInstance($payload));
    }

    public function subscriptionPricesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new SubscriptionPricesDeleteInstance($id));
    }
}
