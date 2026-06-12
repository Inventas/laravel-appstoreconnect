<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterLeaderboardReleaseCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardReleases\GameCenterLeaderboardReleasesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardReleases\GameCenterLeaderboardReleasesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardReleases\GameCenterLeaderboardReleasesGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterLeaderboardReleases extends BaseResource
{
    public function gameCenterLeaderboardReleasesCreateInstance(
        GameCenterLeaderboardReleaseCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardReleasesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboardReleases
     * @param  array<int, string>|null  $fieldsgameCenterDetails
     * @param  array<int, string>|null  $fieldsgameCenterLeaderboards
     * @param  array<int, string>|null  $include
     */
    public function gameCenterLeaderboardReleasesGetInstance(
        string $id,
        ?array $fieldsgameCenterLeaderboardReleases = null,
        ?array $fieldsgameCenterDetails = null,
        ?array $fieldsgameCenterLeaderboards = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterLeaderboardReleasesGetInstance($id, $fieldsgameCenterLeaderboardReleases, $fieldsgameCenterDetails, $fieldsgameCenterLeaderboards, $include));
    }

    public function gameCenterLeaderboardReleasesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterLeaderboardReleasesDeleteInstance($id));
    }
}
