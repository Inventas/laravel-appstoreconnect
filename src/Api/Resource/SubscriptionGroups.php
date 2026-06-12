<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionGroupCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionGroupUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroups\SubscriptionGroupsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroups\SubscriptionGroupsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroups\SubscriptionGroupsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroups\SubscriptionGroupsSubscriptionGroupLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroups\SubscriptionGroupsSubscriptionGroupLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroups\SubscriptionGroupsSubscriptionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroups\SubscriptionGroupsSubscriptionsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroups\SubscriptionGroupsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionGroups extends BaseResource
{
    public function subscriptionGroupsCreateInstance(
        SubscriptionGroupCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionGroupsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionGroups
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $fieldssubscriptionGroupLocalizations
     * @param  array<int, string>|null  $include
     */
    public function subscriptionGroupsGetInstance(
        string $id,
        ?array $fieldssubscriptionGroups = null,
        ?array $fieldssubscriptions = null,
        ?array $fieldssubscriptionGroupLocalizations = null,
        ?array $include = null,
        ?int $limitsubscriptionGroupLocalizations = null,
        ?int $limitsubscriptions = null,
    ): Response {
        return $this->connector->send(new SubscriptionGroupsGetInstance($id, $fieldssubscriptionGroups, $fieldssubscriptions, $fieldssubscriptionGroupLocalizations, $include, $limitsubscriptionGroupLocalizations, $limitsubscriptions));
    }

    public function subscriptionGroupsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new SubscriptionGroupsDeleteInstance($id));
    }

    public function subscriptionGroupsUpdateInstance(
        string $id,
        SubscriptionGroupUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionGroupsUpdateInstance($id, $payload));
    }

    public function subscriptionGroupsSubscriptionGroupLocalizationsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new SubscriptionGroupsSubscriptionGroupLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionGroupLocalizations
     * @param  array<int, string>|null  $fieldssubscriptionGroups
     * @param  array<int, string>|null  $include
     */
    public function subscriptionGroupsSubscriptionGroupLocalizationsGetToManyRelated(
        string $id,
        ?array $fieldssubscriptionGroupLocalizations = null,
        ?array $fieldssubscriptionGroups = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionGroupsSubscriptionGroupLocalizationsGetToManyRelated($id, $fieldssubscriptionGroupLocalizations, $fieldssubscriptionGroups, $limit, $include));
    }

    public function subscriptionGroupsSubscriptionsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionGroupsSubscriptionsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterproductId
     * @param  array<int, string>|null  $filtername
     * @param  array<int, string>|null  $filterstate
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $fieldssubscriptionLocalizations
     * @param  array<int, string>|null  $fieldssubscriptionAppStoreReviewScreenshots
     * @param  array<int, string>|null  $fieldssubscriptionGroups
     * @param  array<int, string>|null  $fieldssubscriptionIntroductoryOffers
     * @param  array<int, string>|null  $fieldssubscriptionPromotionalOffers
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodes
     * @param  array<int, string>|null  $fieldssubscriptionPrices
     * @param  array<int, string>|null  $fieldspromotedPurchases
     * @param  array<int, string>|null  $fieldssubscriptionAvailabilities
     * @param  array<int, string>|null  $fieldswinBackOffers
     * @param  array<int, string>|null  $fieldssubscriptionImages
     * @param  array<int, string>|null  $fieldssubscriptionPlanAvailabilities
     * @param  array<int, string>|null  $include
     */
    public function subscriptionGroupsSubscriptionsGetToManyRelated(
        string $id,
        ?array $filterproductId = null,
        ?array $filtername = null,
        ?array $filterstate = null,
        ?array $sort = null,
        ?array $fieldssubscriptions = null,
        ?array $fieldssubscriptionLocalizations = null,
        ?array $fieldssubscriptionAppStoreReviewScreenshots = null,
        ?array $fieldssubscriptionGroups = null,
        ?array $fieldssubscriptionIntroductoryOffers = null,
        ?array $fieldssubscriptionPromotionalOffers = null,
        ?array $fieldssubscriptionOfferCodes = null,
        ?array $fieldssubscriptionPrices = null,
        ?array $fieldspromotedPurchases = null,
        ?array $fieldssubscriptionAvailabilities = null,
        ?array $fieldswinBackOffers = null,
        ?array $fieldssubscriptionImages = null,
        ?array $fieldssubscriptionPlanAvailabilities = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitsubscriptionLocalizations = null,
        ?int $limitintroductoryOffers = null,
        ?int $limitpromotionalOffers = null,
        ?int $limitofferCodes = null,
        ?int $limitprices = null,
        ?int $limitwinBackOffers = null,
        ?int $limitimages = null,
        ?int $limitplanAvailabilities = null,
    ): Response {
        return $this->connector->send(new SubscriptionGroupsSubscriptionsGetToManyRelated($id, $filterproductId, $filtername, $filterstate, $sort, $fieldssubscriptions, $fieldssubscriptionLocalizations, $fieldssubscriptionAppStoreReviewScreenshots, $fieldssubscriptionGroups, $fieldssubscriptionIntroductoryOffers, $fieldssubscriptionPromotionalOffers, $fieldssubscriptionOfferCodes, $fieldssubscriptionPrices, $fieldspromotedPurchases, $fieldssubscriptionAvailabilities, $fieldswinBackOffers, $fieldssubscriptionImages, $fieldssubscriptionPlanAvailabilities, $limit, $include, $limitsubscriptionLocalizations, $limitintroductoryOffers, $limitpromotionalOffers, $limitofferCodes, $limitprices, $limitwinBackOffers, $limitimages, $limitplanAvailabilities));
    }
}
