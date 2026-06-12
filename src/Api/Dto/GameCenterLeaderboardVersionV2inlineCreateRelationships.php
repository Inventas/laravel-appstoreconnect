<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardVersionV2inlineCreateRelationships
 */
class GameCenterLeaderboardVersionV2inlineCreateRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardVersionV2inlineCreateRelationshipsLeaderboard|Optional $leaderboard = new Optional,
    ) {}
}
