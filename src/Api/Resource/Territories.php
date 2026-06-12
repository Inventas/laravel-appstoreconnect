<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\Territories\TerritoriesGetCollection;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Territories extends BaseResource
{
    /**
     * @param  array<int, string>|null  $fieldsterritories
     */
    public function territoriesGetCollection(?array $fieldsterritories = null, ?int $limit = null): Response
    {
        return $this->connector->send(new TerritoriesGetCollection($fieldsterritories, $limit));
    }
}
