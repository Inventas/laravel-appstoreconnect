<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetVersionV2createRequestDataRelationships
 */
class GameCenterLeaderboardSetVersionV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetVersionV2createRequestDataRelationshipsLeaderboardSet $leaderboardSet,
    ) {}
}
