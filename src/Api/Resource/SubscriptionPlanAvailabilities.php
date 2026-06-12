<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionPlanAvailabilityAvailableTerritoriesLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionPlanAvailabilityCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionPlanAvailabilityUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPlanAvailabilities\SubscriptionPlanAvailabilitiesAvailableTerritoriesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPlanAvailabilities\SubscriptionPlanAvailabilitiesAvailableTerritoriesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPlanAvailabilities\SubscriptionPlanAvailabilitiesAvailableTerritoriesReplaceToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPlanAvailabilities\SubscriptionPlanAvailabilitiesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPlanAvailabilities\SubscriptionPlanAvailabilitiesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPlanAvailabilities\SubscriptionPlanAvailabilitiesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionPlanAvailabilities extends BaseResource
{
    public function subscriptionPlanAvailabilitiesCreateInstance(
        SubscriptionPlanAvailabilityCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionPlanAvailabilitiesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionPlanAvailabilities
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function subscriptionPlanAvailabilitiesGetInstance(
        string $id,
        ?array $fieldssubscriptionPlanAvailabilities = null,
        ?array $fieldsterritories = null,
        ?array $include = null,
        ?int $limitavailableTerritories = null,
    ): Response {
        return $this->connector->send(new SubscriptionPlanAvailabilitiesGetInstance($id, $fieldssubscriptionPlanAvailabilities, $fieldsterritories, $include, $limitavailableTerritories));
    }

    public function subscriptionPlanAvailabilitiesUpdateInstance(
        string $id,
        SubscriptionPlanAvailabilityUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionPlanAvailabilitiesUpdateInstance($id, $payload));
    }

    public function subscriptionPlanAvailabilitiesAvailableTerritoriesGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new SubscriptionPlanAvailabilitiesAvailableTerritoriesGetToManyRelationship($id, $limit));
    }

    public function subscriptionPlanAvailabilitiesAvailableTerritoriesReplaceToManyRelationship(
        string $id,
        SubscriptionPlanAvailabilityAvailableTerritoriesLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionPlanAvailabilitiesAvailableTerritoriesReplaceToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsterritories
     */
    public function subscriptionPlanAvailabilitiesAvailableTerritoriesGetToManyRelated(
        string $id,
        ?array $fieldsterritories = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new SubscriptionPlanAvailabilitiesAvailableTerritoriesGetToManyRelated($id, $fieldsterritories, $limit));
    }
}
