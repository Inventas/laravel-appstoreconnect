<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppAvailabilityV2createRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppAvailabilities\AppAvailabilitiesV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppAvailabilities\AppAvailabilitiesV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\AppAvailabilities\AppAvailabilitiesV2TerritoryAvailabilitiesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppAvailabilities\AppAvailabilitiesV2TerritoryAvailabilitiesGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppAvailabilities extends BaseResource
{
    public function appAvailabilitiesV2createInstance(
        AppAvailabilityV2createRequest $payload,
    ): Response {
        return $this->connector->send(new AppAvailabilitiesV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsappAvailabilities
     * @param  array<int, string>|null  $fieldsterritoryAvailabilities
     * @param  array<int, string>|null  $include
     */
    public function appAvailabilitiesV2getInstance(
        string $id,
        ?array $fieldsappAvailabilities = null,
        ?array $fieldsterritoryAvailabilities = null,
        ?array $include = null,
        ?int $limitterritoryAvailabilities = null,
    ): Response {
        return $this->connector->send(new AppAvailabilitiesV2GetInstance($id, $fieldsappAvailabilities, $fieldsterritoryAvailabilities, $include, $limitterritoryAvailabilities));
    }

    public function appAvailabilitiesV2territoryAvailabilitiesGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppAvailabilitiesV2TerritoryAvailabilitiesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsterritoryAvailabilities
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function appAvailabilitiesV2territoryAvailabilitiesGetToManyRelated(
        string $id,
        ?array $fieldsterritoryAvailabilities = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppAvailabilitiesV2TerritoryAvailabilitiesGetToManyRelated($id, $fieldsterritoryAvailabilities, $fieldsterritories, $limit, $include));
    }
}
