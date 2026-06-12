<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardVersionV2relationships
 */
class GameCenterLeaderboardVersionV2relationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardVersionV2relationshipsLeaderboard|Optional $leaderboard = new Optional,
        public GameCenterLeaderboardVersionV2relationshipsLocalizations|Optional $localizations = new Optional,
    ) {}
}
