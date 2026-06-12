<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardLocalizationsV2_deleteInstance
 */
class GameCenterLeaderboardLocalizationsV2DeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
