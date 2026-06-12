<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboards;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboards_groupLeaderboard_getToOneRelationship
 */
class GameCenterLeaderboardsGroupLeaderboardGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboards/{$this->id}/relationships/groupLeaderboard";
    }

    public function __construct(
        protected string $id,
    ) {}
}
