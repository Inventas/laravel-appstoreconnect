<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetMemberLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetMemberLocalizations_deleteInstance
 */
class GameCenterLeaderboardSetMemberLocalizationsDeleteInstance extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSetMemberLocalizations/{$this->id}";
    }

    public function __construct(
        protected string $id,
    ) {}
}
