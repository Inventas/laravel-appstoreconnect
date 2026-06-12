<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionIntroductoryOffersLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionPricesLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsAppStoreReviewScreenshotGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsAppStoreReviewScreenshotGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsImagesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsImagesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsIntroductoryOffersDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsIntroductoryOffersGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsIntroductoryOffersGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsOfferCodesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsOfferCodesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsPlanAvailabilitiesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsPlanAvailabilitiesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsPricePointsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsPricePointsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsPricesDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsPricesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsPricesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsPromotedPurchaseGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsPromotedPurchaseGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsPromotionalOffersGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsPromotionalOffersGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsSubscriptionAvailabilityGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsSubscriptionAvailabilityGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsSubscriptionLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsSubscriptionLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsUpdateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsWinBackOffersGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\Subscriptions\SubscriptionsWinBackOffersGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Subscriptions extends BaseResource
{
    public function subscriptionsCreateInstance(
        SubscriptionCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionsCreateInstance($payload));
    }

    /**
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
    public function subscriptionsGetInstance(
        string $id,
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
        ?array $include = null,
        ?int $limitimages = null,
        ?int $limitintroductoryOffers = null,
        ?int $limitofferCodes = null,
        ?int $limitplanAvailabilities = null,
        ?int $limitprices = null,
        ?int $limitpromotionalOffers = null,
        ?int $limitsubscriptionLocalizations = null,
        ?int $limitwinBackOffers = null,
    ): Response {
        return $this->connector->send(new SubscriptionsGetInstance($id, $fieldssubscriptions, $fieldssubscriptionLocalizations, $fieldssubscriptionAppStoreReviewScreenshots, $fieldssubscriptionGroups, $fieldssubscriptionIntroductoryOffers, $fieldssubscriptionPromotionalOffers, $fieldssubscriptionOfferCodes, $fieldssubscriptionPrices, $fieldspromotedPurchases, $fieldssubscriptionAvailabilities, $fieldswinBackOffers, $fieldssubscriptionImages, $fieldssubscriptionPlanAvailabilities, $include, $limitimages, $limitintroductoryOffers, $limitofferCodes, $limitplanAvailabilities, $limitprices, $limitpromotionalOffers, $limitsubscriptionLocalizations, $limitwinBackOffers));
    }

    public function subscriptionsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new SubscriptionsDeleteInstance($id));
    }

    public function subscriptionsUpdateInstance(
        string $id,
        SubscriptionUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionsUpdateInstance($id, $payload));
    }

    public function subscriptionsAppStoreReviewScreenshotGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new SubscriptionsAppStoreReviewScreenshotGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionAppStoreReviewScreenshots
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $include
     */
    public function subscriptionsAppStoreReviewScreenshotGetToOneRelated(
        string $id,
        ?array $fieldssubscriptionAppStoreReviewScreenshots = null,
        ?array $fieldssubscriptions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionsAppStoreReviewScreenshotGetToOneRelated($id, $fieldssubscriptionAppStoreReviewScreenshots, $fieldssubscriptions, $include));
    }

    public function subscriptionsImagesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionsImagesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionImages
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $include
     */
    public function subscriptionsImagesGetToManyRelated(
        string $id,
        ?array $fieldssubscriptionImages = null,
        ?array $fieldssubscriptions = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionsImagesGetToManyRelated($id, $fieldssubscriptionImages, $fieldssubscriptions, $limit, $include));
    }

    public function subscriptionsIntroductoryOffersGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionsIntroductoryOffersGetToManyRelationship($id, $limit));
    }

    public function subscriptionsIntroductoryOffersDeleteToManyRelationship(
        string $id,
        SubscriptionIntroductoryOffersLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionsIntroductoryOffersDeleteToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldssubscriptionIntroductoryOffers
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldssubscriptionPricePoints
     * @param  array<int, string>|null  $include
     */
    public function subscriptionsIntroductoryOffersGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $fieldssubscriptionIntroductoryOffers = null,
        ?array $fieldssubscriptions = null,
        ?array $fieldsterritories = null,
        ?array $fieldssubscriptionPricePoints = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionsIntroductoryOffersGetToManyRelated($id, $filterterritory, $fieldssubscriptionIntroductoryOffers, $fieldssubscriptions, $fieldsterritories, $fieldssubscriptionPricePoints, $limit, $include));
    }

    public function subscriptionsOfferCodesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionsOfferCodesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodes
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodeOneTimeUseCodes
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodeCustomCodes
     * @param  array<int, string>|null  $fieldssubscriptionOfferCodePrices
     * @param  array<int, string>|null  $include
     */
    public function subscriptionsOfferCodesGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $fieldssubscriptionOfferCodes = null,
        ?array $fieldssubscriptions = null,
        ?array $fieldssubscriptionOfferCodeOneTimeUseCodes = null,
        ?array $fieldssubscriptionOfferCodeCustomCodes = null,
        ?array $fieldssubscriptionOfferCodePrices = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitoneTimeUseCodes = null,
        ?int $limitcustomCodes = null,
        ?int $limitprices = null,
    ): Response {
        return $this->connector->send(new SubscriptionsOfferCodesGetToManyRelated($id, $filterterritory, $fieldssubscriptionOfferCodes, $fieldssubscriptions, $fieldssubscriptionOfferCodeOneTimeUseCodes, $fieldssubscriptionOfferCodeCustomCodes, $fieldssubscriptionOfferCodePrices, $limit, $include, $limitoneTimeUseCodes, $limitcustomCodes, $limitprices));
    }

    public function subscriptionsPlanAvailabilitiesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionsPlanAvailabilitiesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionPlanAvailabilities
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function subscriptionsPlanAvailabilitiesGetToManyRelated(
        string $id,
        ?array $fieldssubscriptionPlanAvailabilities = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitavailableTerritories = null,
    ): Response {
        return $this->connector->send(new SubscriptionsPlanAvailabilitiesGetToManyRelated($id, $fieldssubscriptionPlanAvailabilities, $fieldsterritories, $limit, $include, $limitavailableTerritories));
    }

    public function subscriptionsPricePointsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionsPricePointsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldssubscriptionPricePoints
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function subscriptionsPricePointsGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $fieldssubscriptionPricePoints = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionsPricePointsGetToManyRelated($id, $filterterritory, $fieldssubscriptionPricePoints, $fieldsterritories, $limit, $include));
    }

    public function subscriptionsPricesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionsPricesGetToManyRelationship($id, $limit));
    }

    public function subscriptionsPricesDeleteToManyRelationship(
        string $id,
        SubscriptionPricesLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionsPricesDeleteToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $filterplanType
     * @param  array<int, string>|null  $filtersubscriptionPricePoint
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldssubscriptionPrices
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldssubscriptionPricePoints
     * @param  array<int, string>|null  $include
     */
    public function subscriptionsPricesGetToManyRelated(
        string $id,
        ?array $filterplanType = null,
        ?array $filtersubscriptionPricePoint = null,
        ?array $filterterritory = null,
        ?array $fieldssubscriptionPrices = null,
        ?array $fieldsterritories = null,
        ?array $fieldssubscriptionPricePoints = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionsPricesGetToManyRelated($id, $filterplanType, $filtersubscriptionPricePoint, $filterterritory, $fieldssubscriptionPrices, $fieldsterritories, $fieldssubscriptionPricePoints, $limit, $include));
    }

    public function subscriptionsPromotedPurchaseGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new SubscriptionsPromotedPurchaseGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldspromotedPurchases
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $include
     */
    public function subscriptionsPromotedPurchaseGetToOneRelated(
        string $id,
        ?array $fieldspromotedPurchases = null,
        ?array $fieldsinAppPurchases = null,
        ?array $fieldssubscriptions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionsPromotedPurchaseGetToOneRelated($id, $fieldspromotedPurchases, $fieldsinAppPurchases, $fieldssubscriptions, $include));
    }

    public function subscriptionsPromotionalOffersGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionsPromotionalOffersGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldssubscriptionPromotionalOffers
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $fieldssubscriptionPromotionalOfferPrices
     * @param  array<int, string>|null  $include
     */
    public function subscriptionsPromotionalOffersGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $fieldssubscriptionPromotionalOffers = null,
        ?array $fieldssubscriptions = null,
        ?array $fieldssubscriptionPromotionalOfferPrices = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitprices = null,
    ): Response {
        return $this->connector->send(new SubscriptionsPromotionalOffersGetToManyRelated($id, $filterterritory, $fieldssubscriptionPromotionalOffers, $fieldssubscriptions, $fieldssubscriptionPromotionalOfferPrices, $limit, $include, $limitprices));
    }

    public function subscriptionsSubscriptionAvailabilityGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new SubscriptionsSubscriptionAvailabilityGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionAvailabilities
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function subscriptionsSubscriptionAvailabilityGetToOneRelated(
        string $id,
        ?array $fieldssubscriptionAvailabilities = null,
        ?array $fieldsterritories = null,
        ?array $include = null,
        ?int $limitavailableTerritories = null,
    ): Response {
        return $this->connector->send(new SubscriptionsSubscriptionAvailabilityGetToOneRelated($id, $fieldssubscriptionAvailabilities, $fieldsterritories, $include, $limitavailableTerritories));
    }

    public function subscriptionsSubscriptionLocalizationsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionsSubscriptionLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionLocalizations
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $include
     */
    public function subscriptionsSubscriptionLocalizationsGetToManyRelated(
        string $id,
        ?array $fieldssubscriptionLocalizations = null,
        ?array $fieldssubscriptions = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionsSubscriptionLocalizationsGetToManyRelated($id, $fieldssubscriptionLocalizations, $fieldssubscriptions, $limit, $include));
    }

    public function subscriptionsWinBackOffersGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionsWinBackOffersGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldswinBackOffers
     * @param  array<int, string>|null  $fieldswinBackOfferPrices
     * @param  array<int, string>|null  $include
     */
    public function subscriptionsWinBackOffersGetToManyRelated(
        string $id,
        ?array $fieldswinBackOffers = null,
        ?array $fieldswinBackOfferPrices = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitprices = null,
    ): Response {
        return $this->connector->send(new SubscriptionsWinBackOffersGetToManyRelated($id, $fieldswinBackOffers, $fieldswinBackOfferPrices, $limit, $include, $limitprices));
    }
}
