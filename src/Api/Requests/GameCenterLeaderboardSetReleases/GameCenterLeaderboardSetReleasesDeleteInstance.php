<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetReleases;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetReleases_deleteInstance
 */
class GameCenterLeaderboardSetReleasesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSetReleases/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
