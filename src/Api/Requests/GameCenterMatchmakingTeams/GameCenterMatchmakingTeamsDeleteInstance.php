<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingTeams;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterMatchmakingTeams_deleteInstance
 */
class GameCenterMatchmakingTeamsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterMatchmakingTeams/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
