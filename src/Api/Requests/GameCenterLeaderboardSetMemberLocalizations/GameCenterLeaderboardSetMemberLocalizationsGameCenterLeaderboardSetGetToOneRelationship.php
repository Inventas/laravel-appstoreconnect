<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSetMemberLocalizations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSetMemberLocalizations_gameCenterLeaderboardSet_getToOneRelationship
 */
class GameCenterLeaderboardSetMemberLocalizationsGameCenterLeaderboardSetGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSetMemberLocalizations/{$this->id}/relationships/gameCenterLeaderboardSet";
    }

    public function __construct(
        protected string $id,
    ) {}
}
