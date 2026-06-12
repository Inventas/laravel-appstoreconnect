<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseAvailabilityCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseAvailabilities\InAppPurchaseAvailabilitiesAvailableTerritoriesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseAvailabilities\InAppPurchaseAvailabilitiesAvailableTerritoriesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseAvailabilities\InAppPurchaseAvailabilitiesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseAvailabilities\InAppPurchaseAvailabilitiesGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class InAppPurchaseAvailabilities extends BaseResource
{
    public function inAppPurchaseAvailabilitiesCreateInstance(
        InAppPurchaseAvailabilityCreateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchaseAvailabilitiesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseAvailabilities
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchaseAvailabilitiesGetInstance(
        string $id,
        ?array $fieldsinAppPurchaseAvailabilities = null,
        ?array $fieldsterritories = null,
        ?array $include = null,
        ?int $limitavailableTerritories = null,
    ): Response {
        return $this->connector->send(new InAppPurchaseAvailabilitiesGetInstance($id, $fieldsinAppPurchaseAvailabilities, $fieldsterritories, $include, $limitavailableTerritories));
    }

    public function inAppPurchaseAvailabilitiesAvailableTerritoriesGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new InAppPurchaseAvailabilitiesAvailableTerritoriesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsterritories
     */
    public function inAppPurchaseAvailabilitiesAvailableTerritoriesGetToManyRelated(
        string $id,
        ?array $fieldsterritories = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new InAppPurchaseAvailabilitiesAvailableTerritoriesGetToManyRelated($id, $fieldsterritories, $limit));
    }
}
