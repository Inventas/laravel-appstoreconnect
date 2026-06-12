<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseV2createRequest;
use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseV2updateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2AppStoreReviewScreenshotGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2AppStoreReviewScreenshotGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2ContentGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2ContentGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2DeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2IapPriceScheduleGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2IapPriceScheduleGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2ImagesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2ImagesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2InAppPurchaseAvailabilityGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2InAppPurchaseAvailabilityGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2InAppPurchaseLocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2InAppPurchaseLocalizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2OfferCodesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2OfferCodesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2PricePointsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2PricePointsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2PromotedPurchaseGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2PromotedPurchaseGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchases\InAppPurchasesV2UpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class InAppPurchases extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasesGetInstance(
        string $id,
        ?array $fieldsinAppPurchases = null,
        ?array $fieldsapps = null,
        ?array $include = null,
        ?int $limitapps = null,
    ): Response {
        return $this->connector->send(new InAppPurchasesGetInstance($id, $fieldsinAppPurchases, $fieldsapps, $include, $limitapps));
    }

    public function inAppPurchasesV2createInstance(
        InAppPurchaseV2createRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchasesV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldsinAppPurchaseLocalizations
     * @param  array<int, string>|null  $fieldsinAppPurchasePricePoints
     * @param  array<int, string>|null  $fieldsinAppPurchaseContents
     * @param  array<int, string>|null  $fieldsinAppPurchaseAppStoreReviewScreenshots
     * @param  array<int, string>|null  $fieldspromotedPurchases
     * @param  array<int, string>|null  $fieldsinAppPurchasePriceSchedules
     * @param  array<int, string>|null  $fieldsinAppPurchaseAvailabilities
     * @param  array<int, string>|null  $fieldsinAppPurchaseImages
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodes
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasesV2getInstance(
        string $id,
        ?array $fieldsinAppPurchases = null,
        ?array $fieldsinAppPurchaseLocalizations = null,
        ?array $fieldsinAppPurchasePricePoints = null,
        ?array $fieldsinAppPurchaseContents = null,
        ?array $fieldsinAppPurchaseAppStoreReviewScreenshots = null,
        ?array $fieldspromotedPurchases = null,
        ?array $fieldsinAppPurchasePriceSchedules = null,
        ?array $fieldsinAppPurchaseAvailabilities = null,
        ?array $fieldsinAppPurchaseImages = null,
        ?array $fieldsinAppPurchaseOfferCodes = null,
        ?array $include = null,
        ?int $limitimages = null,
        ?int $limitinAppPurchaseLocalizations = null,
        ?int $limitofferCodes = null,
        ?int $limitpricePoints = null,
    ): Response {
        return $this->connector->send(new InAppPurchasesV2GetInstance($id, $fieldsinAppPurchases, $fieldsinAppPurchaseLocalizations, $fieldsinAppPurchasePricePoints, $fieldsinAppPurchaseContents, $fieldsinAppPurchaseAppStoreReviewScreenshots, $fieldspromotedPurchases, $fieldsinAppPurchasePriceSchedules, $fieldsinAppPurchaseAvailabilities, $fieldsinAppPurchaseImages, $fieldsinAppPurchaseOfferCodes, $include, $limitimages, $limitinAppPurchaseLocalizations, $limitofferCodes, $limitpricePoints));
    }

    public function inAppPurchasesV2deleteInstance(string $id): Response
    {
        return $this->connector->send(new InAppPurchasesV2DeleteInstance($id));
    }

    public function inAppPurchasesV2updateInstance(
        string $id,
        InAppPurchaseV2updateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchasesV2UpdateInstance($id, $payload));
    }

    public function inAppPurchasesV2appStoreReviewScreenshotGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new InAppPurchasesV2AppStoreReviewScreenshotGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseAppStoreReviewScreenshots
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasesV2appStoreReviewScreenshotGetToOneRelated(
        string $id,
        ?array $fieldsinAppPurchaseAppStoreReviewScreenshots = null,
        ?array $fieldsinAppPurchases = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchasesV2AppStoreReviewScreenshotGetToOneRelated($id, $fieldsinAppPurchaseAppStoreReviewScreenshots, $fieldsinAppPurchases, $include));
    }

    public function inAppPurchasesV2contentGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new InAppPurchasesV2ContentGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseContents
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasesV2contentGetToOneRelated(
        string $id,
        ?array $fieldsinAppPurchaseContents = null,
        ?array $fieldsinAppPurchases = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchasesV2ContentGetToOneRelated($id, $fieldsinAppPurchaseContents, $fieldsinAppPurchases, $include));
    }

    public function inAppPurchasesV2iapPriceScheduleGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new InAppPurchasesV2IapPriceScheduleGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchasePriceSchedules
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldsinAppPurchasePrices
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasesV2iapPriceScheduleGetToOneRelated(
        string $id,
        ?array $fieldsinAppPurchasePriceSchedules = null,
        ?array $fieldsterritories = null,
        ?array $fieldsinAppPurchasePrices = null,
        ?array $include = null,
        ?int $limitmanualPrices = null,
        ?int $limitautomaticPrices = null,
    ): Response {
        return $this->connector->send(new InAppPurchasesV2IapPriceScheduleGetToOneRelated($id, $fieldsinAppPurchasePriceSchedules, $fieldsterritories, $fieldsinAppPurchasePrices, $include, $limitmanualPrices, $limitautomaticPrices));
    }

    public function inAppPurchasesV2imagesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new InAppPurchasesV2ImagesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseImages
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasesV2imagesGetToManyRelated(
        string $id,
        ?array $fieldsinAppPurchaseImages = null,
        ?array $fieldsinAppPurchases = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchasesV2ImagesGetToManyRelated($id, $fieldsinAppPurchaseImages, $fieldsinAppPurchases, $limit, $include));
    }

    public function inAppPurchasesV2inAppPurchaseAvailabilityGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new InAppPurchasesV2InAppPurchaseAvailabilityGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseAvailabilities
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasesV2inAppPurchaseAvailabilityGetToOneRelated(
        string $id,
        ?array $fieldsinAppPurchaseAvailabilities = null,
        ?array $fieldsterritories = null,
        ?array $include = null,
        ?int $limitavailableTerritories = null,
    ): Response {
        return $this->connector->send(new InAppPurchasesV2InAppPurchaseAvailabilityGetToOneRelated($id, $fieldsinAppPurchaseAvailabilities, $fieldsterritories, $include, $limitavailableTerritories));
    }

    public function inAppPurchasesV2inAppPurchaseLocalizationsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new InAppPurchasesV2InAppPurchaseLocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseLocalizations
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasesV2inAppPurchaseLocalizationsGetToManyRelated(
        string $id,
        ?array $fieldsinAppPurchaseLocalizations = null,
        ?array $fieldsinAppPurchases = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchasesV2InAppPurchaseLocalizationsGetToManyRelated($id, $fieldsinAppPurchaseLocalizations, $fieldsinAppPurchases, $limit, $include));
    }

    public function inAppPurchasesV2offerCodesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new InAppPurchasesV2OfferCodesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodes
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodeOneTimeUseCodes
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodeCustomCodes
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferPrices
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasesV2offerCodesGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $fieldsinAppPurchaseOfferCodes = null,
        ?array $fieldsinAppPurchaseOfferCodeOneTimeUseCodes = null,
        ?array $fieldsinAppPurchaseOfferCodeCustomCodes = null,
        ?array $fieldsinAppPurchaseOfferPrices = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitoneTimeUseCodes = null,
        ?int $limitcustomCodes = null,
        ?int $limitprices = null,
    ): Response {
        return $this->connector->send(new InAppPurchasesV2OfferCodesGetToManyRelated($id, $filterterritory, $fieldsinAppPurchaseOfferCodes, $fieldsinAppPurchaseOfferCodeOneTimeUseCodes, $fieldsinAppPurchaseOfferCodeCustomCodes, $fieldsinAppPurchaseOfferPrices, $limit, $include, $limitoneTimeUseCodes, $limitcustomCodes, $limitprices));
    }

    public function inAppPurchasesV2pricePointsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new InAppPurchasesV2PricePointsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldsinAppPurchasePricePoints
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasesV2pricePointsGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $fieldsinAppPurchasePricePoints = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchasesV2PricePointsGetToManyRelated($id, $filterterritory, $fieldsinAppPurchasePricePoints, $fieldsterritories, $limit, $include));
    }

    public function inAppPurchasesV2promotedPurchaseGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new InAppPurchasesV2PromotedPurchaseGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldspromotedPurchases
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasesV2promotedPurchaseGetToOneRelated(
        string $id,
        ?array $fieldspromotedPurchases = null,
        ?array $fieldsinAppPurchases = null,
        ?array $fieldssubscriptions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchasesV2PromotedPurchaseGetToOneRelated($id, $fieldspromotedPurchases, $fieldsinAppPurchases, $fieldssubscriptions, $include));
    }
}
