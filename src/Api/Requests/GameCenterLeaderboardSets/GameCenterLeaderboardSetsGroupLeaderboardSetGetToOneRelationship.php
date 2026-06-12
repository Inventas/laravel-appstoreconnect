<?php

namespace Inventas\AppStoreConnectKit\Api\Requests\GameCenterLeaderboardSets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * gameCenterLeaderboardSets_groupLeaderboardSet_getToOneRelationship
 */
class GameCenterLeaderboardSetsGroupLeaderboardSetGetToOneRelationship extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/v1/gameCenterLeaderboardSets/{$this->id}/relationships/groupLeaderboardSet";
    }

    public function __construct(
        protected string $id,
    ) {}
}
