<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterMatchmakingRuleSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterMatchmakingRuleSets_deleteInstance
 */
class GameCenterMatchmakingRuleSetsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterMatchmakingRuleSets/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
