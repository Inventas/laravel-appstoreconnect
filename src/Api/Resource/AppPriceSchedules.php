<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppPriceScheduleCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppPriceSchedules\AppPriceSchedulesAutomaticPricesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppPriceSchedules\AppPriceSchedulesAutomaticPricesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppPriceSchedules\AppPriceSchedulesBaseTerritoryGetToOneRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppPriceSchedules\AppPriceSchedulesBaseTerritoryGetToOneRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppPriceSchedules\AppPriceSchedulesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppPriceSchedules\AppPriceSchedulesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppPriceSchedules\AppPriceSchedulesManualPricesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppPriceSchedules\AppPriceSchedulesManualPricesGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppPriceSchedules extends BaseResource
{
    public function appPriceSchedulesCreateInstance(
        AppPriceScheduleCreateRequest $payload,
    ): Response {
        return $this->connector->send(new AppPriceSchedulesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappPriceSchedules
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $fieldsappPrices
     * @param  array<int, string>|null  $include
     */
    public function appPriceSchedulesGetInstance(
        string $id,
        ?array $fieldsappPriceSchedules = null,
        ?array $fieldsapps = null,
        ?array $fieldsterritories = null,
        ?array $fieldsappPrices = null,
        ?array $include = null,
        ?int $limitautomaticPrices = null,
        ?int $limitmanualPrices = null,
    ): Response {
        return $this->connector->send(new AppPriceSchedulesGetInstance($id, $fieldsappPriceSchedules, $fieldsapps, $fieldsterritories, $fieldsappPrices, $include, $limitautomaticPrices, $limitmanualPrices));
    }

    public function appPriceSchedulesAutomaticPricesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppPriceSchedulesAutomaticPricesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterstartDate
     * @param  array<int, string>|null  $filterendDate
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldsappPrices
     * @param  array<int, string>|null  $fieldsappPricePoints
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function appPriceSchedulesAutomaticPricesGetToManyRelated(
        string $id,
        ?array $filterstartDate = null,
        ?array $filterendDate = null,
        ?array $filterterritory = null,
        ?array $fieldsappPrices = null,
        ?array $fieldsappPricePoints = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppPriceSchedulesAutomaticPricesGetToManyRelated($id, $filterstartDate, $filterendDate, $filterterritory, $fieldsappPrices, $fieldsappPricePoints, $fieldsterritories, $limit, $include));
    }

    public function appPriceSchedulesBaseTerritoryGetToOneRelationship(string $id): Response
    {
        return $this->connector->send(new AppPriceSchedulesBaseTerritoryGetToOneRelationship($id));
    }

    /**
     * @param  array<int, string>|null  $fieldsterritories
     */
    public function appPriceSchedulesBaseTerritoryGetToOneRelated(string $id, ?array $fieldsterritories = null): Response
    {
        return $this->connector->send(new AppPriceSchedulesBaseTerritoryGetToOneRelated($id, $fieldsterritories));
    }

    public function appPriceSchedulesManualPricesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppPriceSchedulesManualPricesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterstartDate
     * @param  array<int, string>|null  $filterendDate
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldsappPrices
     * @param  array<int, string>|null  $fieldsappPricePoints
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function appPriceSchedulesManualPricesGetToManyRelated(
        string $id,
        ?array $filterstartDate = null,
        ?array $filterendDate = null,
        ?array $filterterritory = null,
        ?array $fieldsappPrices = null,
        ?array $fieldsappPricePoints = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppPriceSchedulesManualPricesGetToManyRelated($id, $filterstartDate, $filterendDate, $filterterritory, $fieldsappPrices, $fieldsappPricePoints, $fieldsterritories, $limit, $include));
    }
}
