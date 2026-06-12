<?php

namespace Inventas\AppStoreConnectKit\Api\Resource;

use Inventas\AppStoreConnectKit\Api\Dto\GameCenterChallengeVersionReleaseCreateRequest;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersionReleases\GameCenterChallengeVersionReleasesCreateInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersionReleases\GameCenterChallengeVersionReleasesDeleteInstance;
use Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeVersionReleases\GameCenterChallengeVersionReleasesGetInstance;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class GameCenterChallengeVersionReleases extends BaseResource
{
    public function gameCenterChallengeVersionReleasesCreateInstance(
        GameCenterChallengeVersionReleaseCreateRequest $payload,
    ): Response {
        return $this->connector->send(new GameCenterChallengeVersionReleasesCreateInstance($payload));
    }

    /**
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersionReleases
     * @param  array<int, string>|null  $fieldsgameCenterChallengeVersions
     * @param  array<int, string>|null  $include
     */
    public function gameCenterChallengeVersionReleasesGetInstance(
        string $id,
        ?array $fieldsgameCenterChallengeVersionReleases = null,
        ?array $fieldsgameCenterChallengeVersions = null,
        ?array $include = null,
    ): Response {
        return $this->connector->send(new GameCenterChallengeVersionReleasesGetInstance($id, $fieldsgameCenterChallengeVersionReleases, $fieldsgameCenterChallengeVersions, $include));
    }

    public function gameCenterChallengeVersionReleasesDeleteInstance(string $id): Response
    {
        return $this->connector->send(new GameCenterChallengeVersionReleasesDeleteInstance($id));
    }
}
