<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardsV2_deleteInstance
 */
class GameCenterLeaderboardsV2DeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboards/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
