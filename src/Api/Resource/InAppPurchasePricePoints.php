<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePricePoints\InAppPurchasePricePointsEqualizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\InAppPurchasePricePoints\InAppPurchasePricePointsEqualizationsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class InAppPurchasePricePoints extends BaseResource
{
    public function inAppPurchasePricePointsEqualizationsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new InAppPurchasePricePointsEqualizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $filterinAppPurchaseV2
     * @param  array<int, string>|null  $fieldsinAppPurchasePricePoints
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function inAppPurchasePricePointsEqualizationsGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $filterinAppPurchaseV2 = null,
        ?array $fieldsinAppPurchasePricePoints = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new InAppPurchasePricePointsEqualizationsGetToManyRelated($id, $filterterritory, $filterinAppPurchaseV2, $fieldsinAppPurchasePricePoints, $fieldsterritories, $limit, $include));
    }
}
