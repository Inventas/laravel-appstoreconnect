<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingQueues;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterMatchmakingQueues_deleteInstance
 */
class GameCenterMatchmakingQueuesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterMatchmakingQueues/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
