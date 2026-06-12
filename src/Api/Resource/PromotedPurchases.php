<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\PromotedPurchaseCreateRequest;
use Inventas\AppStoreConnectKit\Api\Dto\PromotedPurchaseUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\PromotedPurchases\PromotedPurchasesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\PromotedPurchases\PromotedPurchasesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\PromotedPurchases\PromotedPurchasesGetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\PromotedPurchases\PromotedPurchasesUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class PromotedPurchases extends BaseResource
{
    public function promotedPurchasesCreateInstance(
        PromotedPurchaseCreateRequest $payload,
    ): Response {
        return $this->connector->send(new PromotedPurchasesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldspromotedPurchases
     * @param  array<int, string>|null  $fieldsinAppPurchases
     * @param  array<int, string>|null  $fieldssubscriptions
     * @param  array<int, string>|null  $include
     */
    public function promotedPurchasesGetInstance(
        string $id,
        ?array $fieldspromotedPurchases = null,
        ?array $fieldsinAppPurchases = null,
        ?array $fieldssubscriptions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new PromotedPurchasesGetInstance($id, $fieldspromotedPurchases, $fieldsinAppPurchases, $fieldssubscriptions, $include));
    }

    public function promotedPurchasesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new PromotedPurchasesDeleteInstance($id));
    }

    public function promotedPurchasesUpdateInstance(
        string $id,
        PromotedPurchaseUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new PromotedPurchasesUpdateInstance($id, $payload));
    }
}
