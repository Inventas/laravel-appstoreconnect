<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardReleaseRelationshipsGameCenterLeaderboard
 */
class GameCenterLeaderboardReleaseRelationshipsGameCenterLeaderboard extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardReleaseRelationshipsGameCenterLeaderboardData|Optional $data = new Optional,
    ) {}
}
