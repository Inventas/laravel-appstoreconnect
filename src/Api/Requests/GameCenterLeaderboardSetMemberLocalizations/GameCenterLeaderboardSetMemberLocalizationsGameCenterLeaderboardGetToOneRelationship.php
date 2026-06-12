<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetMemberLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetMemberLocalizations_gameCenterLeaderboard_getToOneRelationship
 */
class GameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSetMemberLocalizations/{$this->id}/relationships/gameCenterLeaderboard";
    }

    public function __construct(
        protected string $id,
    ) {}
}
