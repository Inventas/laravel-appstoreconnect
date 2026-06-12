<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRules;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterMatchmakingRules_deleteInstance
 */
class GameCenterMatchmakingRulesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterMatchmakingRules/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
