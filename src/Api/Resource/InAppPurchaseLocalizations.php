<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseLocalizationCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\InAppPurchaseLocalizationUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseLocalizations\InAppPurchaseLocalizationsCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseLocalizations\InAppPurchaseLocalizationsDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseLocalizations\InAppPurchaseLocalizationsGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchaseLocalizations\InAppPurchaseLocalizationsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class InAppPurchaseLocalizations extends BaseResource
{
    public function inAppPurchaseLocalizationsCreateInstance(
        InAppPurchaseLocalizationCreateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchaseLocalizationsCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsinAppPurchaseLocalizations
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchaseLocalizationsGetInstance(
        string $id,
        ?array $fieldsinAppPurchaseLocalizations = null,
        ?array $fieldsinAppPurchases = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchaseLocalizationsGetInstance($id, $fieldsinAppPurchaseLocalizations, $fieldsinAppPurchases, $include));
    }

    public function inAppPurchaseLocalizationsDeleteInstance(string $id): Response
    {
        return $this->connector->send(new InAppPurchaseLocalizationsDeleteInstance($id));
    }

    public function inAppPurchaseLocalizationsUpdateInstance(
        string $id,
        InAppPurchaseLocalizationUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new InAppPurchaseLocalizationsUpdateInstance($id, $payload));
    }
}
