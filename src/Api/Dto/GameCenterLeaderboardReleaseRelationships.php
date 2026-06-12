<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardReleaseRelationships
 */
class GameCenterLeaderboardReleaseRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardReleaseRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterLeaderboardReleaseRelationshipsGameCenterLeaderboard|Optional $gameCenterLeaderboard = new Optional,
    ) {}
}
