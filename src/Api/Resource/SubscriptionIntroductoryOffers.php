<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionIntroductoryOfferCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionIntroductoryOfferUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionIntroductoryOffers\SubscriptionIntroductoryOffersCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionIntroductoryOffers\SubscriptionIntroductoryOffersDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionIntroductoryOffers\SubscriptionIntroductoryOffersUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionIntroductoryOffers extends BaseResource
{
    public function subscriptionIntroductoryOffersCreateInstance(
        SubscriptionIntroductoryOfferCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionIntroductoryOffersCreateInstance($payload));
    }

    public function subscriptionIntroductoryOffersDeleteInstance(string $id): Response
    {
        return $this->connector->send(new SubscriptionIntroductoryOffersDeleteInstance($id));
    }

    public function subscriptionIntroductoryOffersUpdateInstance(
        string $id,
        SubscriptionIntroductoryOfferUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionIntroductoryOffersUpdateInstance($id, $payload));
    }
}
