<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Requests\Actors\ActorsGetCollection;
use Inventas\AppStoreConnectKit\Api\Requests\Actors\ActorsGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Actors extends BaseResource
{
    /**
     * @param  array<int, string>  $filterid
     * @param  array<int, string>|null  $fieldsactors
     */
    public function actorsGetCollection(array $filterid, ?array $fieldsactors = null, ?int $limit = null): Response
    {
        return $this->connector->send(new ActorsGetCollection($filterid, $fieldsactors, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsactors
     */
    public function actorsGetInstance(string $id, ?array $fieldsactors = null): Response
    {
        return $this->connector->send(new ActorsGetInstance($id, $fieldsactors));
    }
}
