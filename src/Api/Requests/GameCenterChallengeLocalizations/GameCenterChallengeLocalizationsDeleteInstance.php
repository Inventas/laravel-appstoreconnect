<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterChallengeLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterChallengeLocalizations_deleteInstance
 */
class GameCenterChallengeLocalizationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterChallengeLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
