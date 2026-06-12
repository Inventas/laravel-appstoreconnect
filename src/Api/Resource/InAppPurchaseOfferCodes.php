<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseOfferCodeCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseOfferCodeUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodes\InAppPurchaseOfferCodesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodes\InAppPurchaseOfferCodesCustomCodesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodes\InAppPurchaseOfferCodesCustomCodesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodes\InAppPurchaseOfferCodesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodes\InAppPurchaseOfferCodesOneTimeUseCodesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodes\InAppPurchaseOfferCodesOneTimeUseCodesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodes\InAppPurchaseOfferCodesPricesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodes\InAppPurchaseOfferCodesPricesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseOfferCodes\InAppPurchaseOfferCodesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class InAppPurchaseOfferCodes extends BaseResource
{
    public function inAppPurchaseOfferCodesCreateInstance(
        InAppPurchaseOfferCodeCreateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchaseOfferCodesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodes
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodeOneTimeUseCodes
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodeCustomCodes
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferPrices
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchaseOfferCodesGetInstance(
        string $id,
        ?array $fieldsinAppPurchaseOfferCodes = null,
        ?array $fieldsinAppPurchaseOfferCodeOneTimeUseCodes = null,
        ?array $fieldsinAppPurchaseOfferCodeCustomCodes = null,
        ?array $fieldsinAppPurchaseOfferPrices = null,
        ?array $include = null,
        ?int $limitcustomCodes = null,
        ?int $limitoneTimeUseCodes = null,
        ?int $limitprices = null,
    ): Response {
        return $this->connector->send(new InAppPurchaseOfferCodesGetInstance($id, $fieldsinAppPurchaseOfferCodes, $fieldsinAppPurchaseOfferCodeOneTimeUseCodes, $fieldsinAppPurchaseOfferCodeCustomCodes, $fieldsinAppPurchaseOfferPrices, $include, $limitcustomCodes, $limitoneTimeUseCodes, $limitprices));
    }

    public function inAppPurchaseOfferCodesUpdateInstance(
        string $id,
        InAppPurchaseOfferCodeUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchaseOfferCodesUpdateInstance($id, $payload));
    }

    public function inAppPurchaseOfferCodesCustomCodesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new InAppPurchaseOfferCodesCustomCodesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodeCustomCodes
     * @param  array<int, string>|null  $fieldsactors
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchaseOfferCodesCustomCodesGetToManyRelated(
        string $id,
        ?array $fieldsinAppPurchaseOfferCodeCustomCodes = null,
        ?array $fieldsactors = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchaseOfferCodesCustomCodesGetToManyRelated($id, $fieldsinAppPurchaseOfferCodeCustomCodes, $fieldsactors, $limit, $include));
    }

    public function inAppPurchaseOfferCodesOneTimeUseCodesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new InAppPurchaseOfferCodesOneTimeUseCodesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferCodeOneTimeUseCodes
     * @param  array<int, string>|null  $fieldsactors
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchaseOfferCodesOneTimeUseCodesGetToManyRelated(
        string $id,
        ?array $fieldsinAppPurchaseOfferCodeOneTimeUseCodes = null,
        ?array $fieldsactors = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchaseOfferCodesOneTimeUseCodesGetToManyRelated($id, $fieldsinAppPurchaseOfferCodeOneTimeUseCodes, $fieldsactors, $limit, $include));
    }

    public function inAppPurchaseOfferCodesPricesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new InAppPurchaseOfferCodesPricesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldsinAppPurchaseOfferPrices
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldsinAppPurchasePricePoints
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchaseOfferCodesPricesGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $fieldsinAppPurchaseOfferPrices = null,
        ?array $fieldsterritories = null,
        ?array $fieldsinAppPurchasePricePoints = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchaseOfferCodesPricesGetToManyRelated($id, $filterterritory, $fieldsinAppPurchaseOfferPrices, $fieldsterritories, $fieldsinAppPurchasePricePoints, $limit, $include));
    }
}
