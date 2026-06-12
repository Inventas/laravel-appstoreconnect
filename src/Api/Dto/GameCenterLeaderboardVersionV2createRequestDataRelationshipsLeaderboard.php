<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardVersionV2createRequestDataRelationshipsLeaderboard
 */
class GameCenterLeaderboardVersionV2createRequestDataRelationshipsLeaderboard extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardVersionV2createRequestDataRelationshipsLeaderboardData $data,
    ) {}
}
