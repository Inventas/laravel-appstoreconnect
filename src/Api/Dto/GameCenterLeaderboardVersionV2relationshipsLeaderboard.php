<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardVersionV2relationshipsLeaderboard
 */
class GameCenterLeaderboardVersionV2relationshipsLeaderboard extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardVersionV2relationshipsLeaderboardData|Optional $data = new Optional,
    ) {}
}
