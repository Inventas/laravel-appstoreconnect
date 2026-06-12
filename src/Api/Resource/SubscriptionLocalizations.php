<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\SubscriptionLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionLocalizations\SubscriptionLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionLocalizations\SubscriptionLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionLocalizations\SubscriptionLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionLocalizations\SubscriptionLocalizationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionLocalizations extends BaseResource
{
    public function subscriptionLocalizationsCreateInstance(
        SubscriptionLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldssubscriptionLocalizations
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $include
     */
    public function subscriptionLocalizationsGetInstance(
        string $id,
        ?array $fieldssubscriptionLocalizations = null,
        ?array $fieldssubscriptions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionLocalizationsGetInstance($id, $fieldssubscriptionLocalizations, $fieldssubscriptions, $include));
    }

    public function subscriptionLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new SubscriptionLocalizationsDeleteInstance($id));
    }

    public function subscriptionLocalizationsUpdateInstance(
        string $id,
        SubscriptionLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new SubscriptionLocalizationsUpdateInstance($id, $payload));
    }
}
