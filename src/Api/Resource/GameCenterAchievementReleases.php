<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterAchievementReleaseCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementReleases\GameCenterAchievementReleasesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementReleases\GameCenterAchievementReleasesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterAchievementReleases\GameCenterAchievementReleasesGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterAchievementReleases extends BaseResource
{
    public function gameCenterAchievementReleasesCreateInstance(
        GameCenterAchievementReleaseCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterAchievementReleasesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterAchievementReleases
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterAchievements
     * @param  array<int, string>|null  $include
     */
    public function gameCenterAchievementReleasesGetInstance(
        string $id,
        ?array $fieldsgameCenterAchievementReleases = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterAchievements = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterAchievementReleasesGetInstance($id, $fieldsgameCenterAchievementReleases, $fieldsgameCenterDetails, $fieldsgameCenterAchievements, $include));
    }

    public function gameCenterAchievementReleasesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterAchievementReleasesDeleteInstance($id));
    }
}
