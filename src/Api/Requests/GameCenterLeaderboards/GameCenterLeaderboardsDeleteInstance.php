<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboards_deleteInstance
 */
class GameCenterLeaderboardsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboards/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
