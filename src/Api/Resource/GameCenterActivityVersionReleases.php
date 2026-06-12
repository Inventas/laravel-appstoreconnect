<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterActivityVersionReleaseCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersionReleases\GameCenterActivityVersionReleasesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersionReleases\GameCenterActivityVersionReleasesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterActivityVersionReleases\GameCenterActivityVersionReleasesGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterActivityVersionReleases extends BaseResource
{
    public function gameCenterActivityVersionReleasesCreateInstance(
        GameCenterActivityVersionReleaseCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterActivityVersionReleasesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterActivityVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterActivityVersionReleasesGetInstance(
        string $id,
        ?array $fieldsgameCenterActivityVersionReleases = null,
        ?array $fieldsgameCenterActivityVersions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterActivityVersionReleasesGetInstance($id, $fieldsgameCenterActivityVersionReleases, $fieldsgameCenterActivityVersions, $include));
    }

    public function gameCenterActivityVersionReleasesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterActivityVersionReleasesDeleteInstance($id));
    }
}
