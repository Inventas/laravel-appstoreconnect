<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardVersionV2createRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardVersions\GameCenterLeaderboardVersionsV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardVersions\GameCenterLeaderboardVersionsV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardVersions\GameCenterLeaderboardVersionsV2LocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardVersions\GameCenterLeaderboardVersionsV2LocalizationsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterLeaderboardVersions extends BaseResource
{
    public function gameCenterLeaderboardVersionsV2createInstance(
        GameCenterLeaderboardVersionV2createRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardVersionsV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardVersionsV2getInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboardVersions = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $fieldsgameCenterLeaderboardLocalizations = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardVersionsV2GetInstance($id, $fieldsgameCenterLeaderboardVersions, $fieldsgameCenterLeaderboards, $fieldsgameCenterLeaderboardLocalizations, $include, $limitlocalizations));
    }

    public function gameCenterLeaderboardVersionsV2localizationsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardVersionsV2LocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardVersionsV2localizationsGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterLeaderboardLocalizations = null,
        ?array $fieldsgameCenterLeaderboardVersions = null,
        ?array $fieldsgameCenterLeaderboardImages = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardVersionsV2LocalizationsGetToManyRelated($id, $fieldsgameCenterLeaderboardLocalizations, $fieldsgameCenterLeaderboardVersions, $fieldsgameCenterLeaderboardImages, $limit, $include));
    }
}
