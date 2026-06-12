<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardLocalizationRelationshipsGameCenterLeaderboard
 */
class GameCenterLeaderboardLocalizationRelationshipsGameCenterLeaderboard extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardLocalizationRelationshipsGameCenterLeaderboardData|Optional $data = new Optional,
    ) {}
}
