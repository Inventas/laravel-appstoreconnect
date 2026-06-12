<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallenges;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterChallenges_deleteInstance
 */
class GameCenterChallengesDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallenges/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
