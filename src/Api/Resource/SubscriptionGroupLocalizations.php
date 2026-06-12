<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionGroupLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionGroupLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroupLocalizations\SubscriptionGroupLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroupLocalizations\SubscriptionGroupLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroupLocalizations\SubscriptionGroupLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionGroupLocalizations\SubscriptionGroupLocalizationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionGroupLocalizations extends BaseResource
{
    public function subscriptionGroupLocalizationsCreateInstance(
        SubscriptionGroupLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionGroupLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionGroupLocalizations
     * @param  array<int, string>|null  $fieldssubscriptionGroups
     * @param  array<int, string>|null  $include
     */
    public function subscriptionGroupLocalizationsGetInstance(
        string $id,
        ?array $fieldssubscriptionGroupLocalizations = null,
        ?array $fieldssubscriptionGroups = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionGroupLocalizationsGetInstance($id, $fieldssubscriptionGroupLocalizations, $fieldssubscriptionGroups, $include));
    }

    public function subscriptionGroupLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new SubscriptionGroupLocalizationsDeleteInstance($id));
    }

    public function subscriptionGroupLocalizationsUpdateInstance(
        string $id,
        SubscriptionGroupLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionGroupLocalizationsUpdateInstance($id, $payload));
    }
}
