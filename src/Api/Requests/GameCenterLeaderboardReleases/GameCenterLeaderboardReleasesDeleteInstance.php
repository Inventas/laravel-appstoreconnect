<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardReleases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardReleases_deleteInstance
 */
class GameCenterLeaderboardReleasesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardReleases/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
