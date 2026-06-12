<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetVersionV2createRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetVersions\GameCenterLeaderboardSetVersionsV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetVersions\GameCenterLeaderboardSetVersionsV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetVersions\GameCenterLeaderboardSetVersionsV2LocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetVersions\GameCenterLeaderboardSetVersionsV2LocalizationsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterLeaderboardSetVersions extends BaseResource
{
    public function gameCenterLeaderboardSetVersionsV2createInstance(
        GameCenterLeaderboardSetVersionV2createRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetVersionsV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetVersionsV2getInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboardSetVersions = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetVersionsV2GetInstance($id, $fieldsgameCenterLeaderboardSetVersions, $fieldsgameCenterLeaderboardSets, $fieldsgameCenterLeaderboardSetLocalizations, $include, $limitlocalizations));
    }

    public function gameCenterLeaderboardSetVersionsV2localizationsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetVersionsV2LocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetVersions
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetVersionsV2localizationsGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterLeaderboardSetLocalizations = null,
        ?array $fieldsgameCenterLeaderboardSetVersions = null,
        ?array $fieldsgameCenterLeaderboardSetImages = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetVersionsV2LocalizationsGetToManyRelated($id, $fieldsgameCenterLeaderboardSetLocalizations, $fieldsgameCenterLeaderboardSetVersions, $fieldsgameCenterLeaderboardSetImages, $limit, $include));
    }
}
