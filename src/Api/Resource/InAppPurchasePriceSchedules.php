<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchasePriceScheduleCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePriceSchedules\InAppPurchasePriceSchedulesAutomaticPricesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePriceSchedules\InAppPurchasePriceSchedulesAutomaticPricesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePriceSchedules\InAppPurchasePriceSchedulesBaseTerritoryGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePriceSchedules\InAppPurchasePriceSchedulesBaseTerritoryGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePriceSchedules\InAppPurchasePriceSchedulesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePriceSchedules\InAppPurchasePriceSchedulesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePriceSchedules\InAppPurchasePriceSchedulesManualPricesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePriceSchedules\InAppPurchasePriceSchedulesManualPricesGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class InAppPurchasePriceSchedules extends BaseResource
{
    public function inAppPurchasePriceSchedulesCreateInstance(
        InAppPurchasePriceScheduleCreateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchasePriceSchedulesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchasePriceSchedules
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldsinAppPurchasePrices
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasePriceSchedulesGetInstance(
        string $id,
        ?array $fieldsinAppPurchasePriceSchedules = null,
        ?array $fieldsterritories = null,
        ?array $fieldsinAppPurchasePrices = null,
        ?array $include = null,
        ?int $limitautomaticPrices = null,
        ?int $limitmanualPrices = null,
    ): Response {
        return $this->connector->send(new InAppPurchasePriceSchedulesGetInstance($id, $fieldsinAppPurchasePriceSchedules, $fieldsterritories, $fieldsinAppPurchasePrices, $include, $limitautomaticPrices, $limitmanualPrices));
    }

    public function inAppPurchasePriceSchedulesAutomaticPricesGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new InAppPurchasePriceSchedulesAutomaticPricesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldsinAppPurchasePrices
     * @param  array<int, string>|null  $fieldsinAppPurchasePricePoints
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasePriceSchedulesAutomaticPricesGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $fieldsinAppPurchasePrices = null,
        ?array $fieldsinAppPurchasePricePoints = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchasePriceSchedulesAutomaticPricesGetToManyRelated($id, $filterterritory, $fieldsinAppPurchasePrices, $fieldsinAppPurchasePricePoints, $fieldsterritories, $limit, $include));
    }

    public function inAppPurchasePriceSchedulesBaseTerritoryGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new InAppPurchasePriceSchedulesBaseTerritoryGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsterritories
     */
    public function inAppPurchasePriceSchedulesBaseTerritoryGetToOneRelated(
        string $id,
        ?array $fieldsterritories = null,
    ): Response {
        return $this->connector->send(new InAppPurchasePriceSchedulesBaseTerritoryGetToOneRelated($id, $fieldsterritories));
    }

    public function inAppPurchasePriceSchedulesManualPricesGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new InAppPurchasePriceSchedulesManualPricesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldsinAppPurchasePrices
     * @param  array<int, string>|null  $fieldsinAppPurchasePricePoints
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasePriceSchedulesManualPricesGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $fieldsinAppPurchasePrices = null,
        ?array $fieldsinAppPurchasePricePoints = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchasePriceSchedulesManualPricesGetToManyRelated($id, $filterterritory, $fieldsinAppPurchasePrices, $fieldsinAppPurchasePricePoints, $fieldsterritories, $limit, $include));
    }
}
