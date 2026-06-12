<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionPromotionalOfferCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionPromotionalOfferUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPromotionalOffers\SubscriptionPromotionalOffersCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPromotionalOffers\SubscriptionPromotionalOffersDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPromotionalOffers\SubscriptionPromotionalOffersGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPromotionalOffers\SubscriptionPromotionalOffersPricesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPromotionalOffers\SubscriptionPromotionalOffersPricesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPromotionalOffers\SubscriptionPromotionalOffersUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionPromotionalOffers extends BaseResource
{
    public function subscriptionPromotionalOffersCreateInstance(
        SubscriptionPromotionalOfferCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionPromotionalOffersCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionPromotionalOffers
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $fieldssubscriptionPromotionalOfferPrices
     * @param  array<int, string>|null  $include
     */
    public function subscriptionPromotionalOffersGetInstance(
        string $id,
        ?array $fieldssubscriptionPromotionalOffers = null,
        ?array $fieldssubscriptions = null,
        ?array $fieldssubscriptionPromotionalOfferPrices = null,
        ?array $include = null,
        ?int $limitprices = null,
    ): Response {
        return $this->connector->send(new SubscriptionPromotionalOffersGetInstance($id, $fieldssubscriptionPromotionalOffers, $fieldssubscriptions, $fieldssubscriptionPromotionalOfferPrices, $include, $limitprices));
    }

    public function subscriptionPromotionalOffersDeleteInstance(string $id): Response
    {
        return $this->connector->send(new SubscriptionPromotionalOffersDeleteInstance($id));
    }

    public function subscriptionPromotionalOffersUpdateInstance(
        string $id,
        SubscriptionPromotionalOfferUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionPromotionalOffersUpdateInstance($id, $payload));
    }

    public function subscriptionPromotionalOffersPricesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionPromotionalOffersPricesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldssubscriptionPromotionalOfferPrices
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldssubscriptionPricePoints
     * @param  array<int, string>|null  $include
     */
    public function subscriptionPromotionalOffersPricesGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $fieldssubscriptionPromotionalOfferPrices = null,
        ?array $fieldsterritories = null,
        ?array $fieldssubscriptionPricePoints = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionPromotionalOffersPricesGetToManyRelated($id, $filterterritory, $fieldssubscriptionPromotionalOfferPrices, $fieldsterritories, $fieldssubscriptionPricePoints, $limit, $include));
    }
}
