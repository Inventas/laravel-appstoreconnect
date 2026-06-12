<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardSetReleaseCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetReleases\GameCenterLeaderboardSetReleasesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetReleases\GameCenterLeaderboardSetReleasesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetReleases\GameCenterLeaderboardSetReleasesGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterLeaderboardSetReleases extends BaseResource
{
    public function gameCenterLeaderboardSetReleasesCreateInstance(
        GameCenterLeaderboardSetReleaseCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetReleasesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSetReleases
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardSets
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardSetReleasesGetInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboardSetReleases = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterLeaderboardSets = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardSetReleasesGetInstance($id, $fieldsgameCenterLeaderboardSetReleases, $fieldsgameCenterDetails, $fieldsgameCenterLeaderboardSets, $include));
    }

    public function gameCenterLeaderboardSetReleasesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardSetReleasesDeleteInstance($id));
    }
}
