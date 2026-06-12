<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionOfferCodeCustomCodeCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionOfferCodeCustomCodeUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodeCustomCodes\SubscriptionOfferCodeCustomCodesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodeCustomCodes\SubscriptionOfferCodeCustomCodesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionOfferCodeCustomCodes\SubscriptionOfferCodeCustomCodesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionOfferCodeCustomCodes extends BaseResource
{
    public function subscriptionOfferCodeCustomCodesCreateInstance(
        SubscriptionOfferCodeCustomCodeCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionOfferCodeCustomCodesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodeCustomCodes
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodes
     * @param  array<int, string>|null  $include
     */
    public function subscriptionOfferCodeCustomCodesGetInstance(
        string $id,
        ?array $fieldssubscriptionOfferCodeCustomCodes = null,
        ?array $fieldssubscriptionOfferCodes = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionOfferCodeCustomCodesGetInstance($id, $fieldssubscriptionOfferCodeCustomCodes, $fieldssubscriptionOfferCodes, $include));
    }

    public function subscriptionOfferCodeCustomCodesUpdateInstance(
        string $id,
        SubscriptionOfferCodeCustomCodeUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionOfferCodeCustomCodesUpdateInstance($id, $payload));
    }
}
