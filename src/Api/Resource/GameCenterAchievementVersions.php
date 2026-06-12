<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementVersionV2createRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementVersions\GameCenterAchievementVersionsV2CreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementVersions\GameCenterAchievementVersionsV2GetInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementVersions\GameCenterAchievementVersionsV2LocalizationsGetToManyRelated;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementVersions\GameCenterAchievementVersionsV2LocalizationsGetToManyRelationship;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterAchievementVersions extends BaseResource
{
    public function gameCenterAchievementVersionsV2createInstance(
        GameCenterAchievementVersionV2createRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementVersionsV2CreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementVersions
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAchievementVersionsV2getInstance(
        string $id,
        ?array $fieldsgameCenterAchievementVersions = null,
        ?array $fieldsgameCenterAchievements = null,
        ?array $fieldsgameCenterAchievementLocalizations = null,
        ?array $include = null,
        ?int $limitlocalizations = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementVersionsV2GetInstance($id, $fieldsgameCenterAchievementVersions, $fieldsgameCenterAchievements, $fieldsgameCenterAchievementLocalizations, $include, $limitlocalizations));
    }

    public function gameCenterAchievementVersionsV2localizationsGetToManyRelationship(
        string $id,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementVersionsV2LocalizationsGetToManyRelationship($id, $limit));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementLocalizations
     * @param  array<int, string>|null  $fieldsgameCenterAchievementVersions
     * @param  array<int, string>|null  $fieldsgameCenterAchievementImages
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAchievementVersionsV2localizationsGetToManyRelated(
        string $id,
        ?array $fieldsgameCenterAchievementLocalizations = null,
        ?array $fieldsgameCenterAchievementVersions = null,
        ?array $fieldsgameCenterAchievementImages = null,
        ?int $limit = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementVersionsV2LocalizationsGetToManyRelated($id, $fieldsgameCenterAchievementLocalizations, $fieldsgameCenterAchievementVersions, $fieldsgameCenterAchievementImages, $limit, $include));
    }
}
