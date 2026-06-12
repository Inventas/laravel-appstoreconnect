<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\AppPricePoints\AppPricePointsV3EqualizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppPricePoints\AppPricePointsV3EqualizationsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppPricePoints\AppPricePointsV3GetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppPricePoints extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsappPricePoints
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function appPricePointsV3getInstance(
        string $id,
        ?array $fieldsappPricePoints = null,
        ?array $fieldsapps = null,
        ?array $fieldsterritories = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppPricePointsV3GetInstance($id, $fieldsappPricePoints, $fieldsapps, $fieldsterritories, $include));
    }

    public function appPricePointsV3equalizationsGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppPricePointsV3EqualizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $filterterritory
     * @param  array<int, string>|null  $fieldsappPricePoints
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $fieldsterritories
     * @param  array<int, string>|null  $include
     */
    public function appPricePointsV3equalizationsGetToManyRelated(
        string $id,
        ?array $filterterritory = null,
        ?array $fieldsappPricePoints = null,
        ?array $fieldsapps = null,
        ?array $fieldsterritories = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new AppPricePointsV3EqualizationsGetToManyRelated($id, $filterterritory, $fieldsappPricePoints, $fieldsapps, $fieldsterritories, $limit, $include));
    }
}
