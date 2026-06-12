<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterEnabledVersionCompatibleVersionsLinkagesRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterEnabledVersions\GameCenterEnabledVersionsCompatibleVersionsCreateToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterEnabledVersions\GameCenterEnabledVersionsCompatibleVersionsDeleteToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterEnabledVersions\GameCenterEnabledVersionsCompatibleVersionsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterEnabledVersions\GameCenterEnabledVersionsCompatibleVersionsGetToManyRelationship;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterEnabledVersions\GameCenterEnabledVersionsCompatibleVersionsReplaceToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterEnabledVersions extends BaseResource
{
    public function gameCenterEnabledVersionsCompatibleVersionsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterEnabledVersionsCompatibleVersionsGetToManyRelationship($id, $limit));
    }

    public function gameCenterEnabledVersionsCompatibleVersionsCreateToManyRelationship(
        string $id,
        GameCenterEnabledVersionCompatibleVersionsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterEnabledVersionsCompatibleVersionsCreateToManyRelationship($id, $payload));
    }

    public function gameCenterEnabledVersionsCompatibleVersionsDeleteToManyRelationship(
        string $id,
        GameCenterEnabledVersionCompatibleVersionsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterEnabledVersionsCompatibleVersionsDeleteToManyRelationship($id, $payload));
    }

    public function gameCenterEnabledVersionsCompatibleVersionsReplaceToManyRelationship(
        string $id,
        GameCenterEnabledVersionCompatibleVersionsLinkagesRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterEnabledVersionsCompatibleVersionsReplaceToManyRelationship($id, $payload));
    }

    /**
     * @param  array<int, string>|null  $filterplatform
     * @param  array<int, string>|null  $filterversionString
     * @param  array<int, string>|null  $filterapp
     * @param  array<int, string>|null  $filterid
     * @param  array<int, string>|null  $sort
     * @param  array<int, string>|null  $fieldsgameCenterEnabledVersions
     * @param  array<int, string>|null  $fieldsapps
     * @param  array<int, string>|null  $include
     */
    public function gameCenterEnabledVersionsCompatibleVersionsGetToManyRelated(
        string $id,
        ?array $filterplatform = null,
        ?array $filterversionString = null,
        ?array $filterapp = null,
        ?array $filterid = null,
        ?array $sort = null,
        ?array $fieldsgameCenterEnabledVersions = null,
        ?array $fieldsapps = null,
        ?int $limit = null,
        ?array $include = null,
        ?int $limitcompatibleVersions = null,
    ): Response {
        return $this->connector->send(new GameCenterEnabledVersionsCompatibleVersionsGetToManyRelated($id, $filterplatform, $filterversionString, $filterapp, $filterid, $sort, $fieldsgameCenterEnabledVersions, $fieldsapps, $limit, $include, $limitcompatibleVersions));
    }
}
