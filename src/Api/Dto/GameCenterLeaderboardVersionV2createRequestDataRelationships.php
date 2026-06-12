<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardVersionV2createRequestDataRelationships
 */
class GameCenterLeaderboardVersionV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardVersionV2createRequestDataRelationshipsLeaderboard $leaderboard,
    ) {}
}
