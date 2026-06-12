<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\AppTagUpdateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\AppTags\AppTagsTerritoriesGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\AppTags\AppTagsTerritoriesGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\AppTags\AppTagsUpdateInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AppTags extends BaseResource
{
    public function appTagsUpdateInstance(
        string $id,
        AppTagUpdateRequest $payload,
    ): Response {
        return $this->connector->send(new AppTagsUpdateInstance($id, $payload));
    }

    public function appTagsTerritoriesGetToManyRelationship(string $id, ?int $limit = null): Response
    {
        return $this->connector->send(new AppTagsTerritoriesGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsterritories
     */
    public function appTagsTerritoriesGetToManyRelated(
        string $id,
        ?array $fieldsterritories = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new AppTagsTerritoriesGetToManyRelated($id, $fieldsterritories, $limit));
    }
}
