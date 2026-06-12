<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionAvailabilityCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionAvailabilities\SubscriptionAvailabilitiesAvailableTerritoriesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionAvailabilities\SubscriptionAvailabilitiesAvailableTerritoriesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionAvailabilities\SubscriptionAvailabilitiesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionAvailabilities\SubscriptionAvailabilitiesGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionAvailabilities extends BaseResource
{
    public function subscriptionAvailabilitiesCreateInstance(
        SubscriptionAvailabilityCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionAvailabilitiesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionAvailabilities
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function subscriptionAvailabilitiesGetInstance(
        string $id,
        ?array $fieldssubscriptionAvailabilities = null,
        ?array $fieldsterritories = null,
        ?array $include = null,
        ?int $limitavailableTerritories = null,
    ): Response {
        return $this->connector->send(new SubscriptionAvailabilitiesGetInstance($id, $fieldssubscriptionAvailabilities, $fieldsterritories, $include, $limitavailableTerritories));
    }

    public function subscriptionAvailabilitiesAvailableTerritoriesGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new SubscriptionAvailabilitiesAvailableTerritoriesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsterritories
     */
    public function subscriptionAvailabilitiesAvailableTerritoriesGetToManyRelated(
        string $id,
        ?array $fieldsterritories = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new SubscriptionAvailabilitiesAvailableTerritoriesGetToManyRelated($id, $fieldsterritories, $limit));
    }
}
