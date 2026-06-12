<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetLocalizationsV2_deleteInstance
 */
class GameCenterLeaderboardSetLocalizationsV2DeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v2/gameCenterLeaderboardSetLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
