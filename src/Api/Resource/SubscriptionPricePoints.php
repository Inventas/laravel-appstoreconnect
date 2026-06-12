<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPricePoints\SubscriptionPricePointsEqualizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPricePoints\SubscriptionPricePointsEqualizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\SubscriptionPricePoints\SubscriptionPricePointsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class SubscriptionPricePoints extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldssubscriptionPricePoints
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function subscriptionPricePointsGetInstance(
        string $id,
        ?array $fieldssubscriptionPricePoints = null,
        ?array $fieldsterritories = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionPricePointsGetInstance($id, $fieldssubscriptionPricePoints, $fieldsterritories, $include));
    }

    public function subscriptionPricePointsEqualizationsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new SubscriptionPricePointsEqualizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $filtersubscription
     * @param  array<int, string>|null  $fieldssubscriptionPricePoints
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function subscriptionPricePointsEqualizationsGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $filtersubscription = null,
        ?array $fieldssubscriptionPricePoints = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new SubscriptionPricePointsEqualizationsGetToManyRelated($id, $filterterritory, $filtersubscription, $fieldssubscriptionPricePoints, $fieldsterritories, $limit, $include));
    }
}
