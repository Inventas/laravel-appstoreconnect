<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardLocalizationRelationships
 */
class GameCenterLeaderboardLocalizationRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardLocalizationRelationshipsGameCenterLeaderboard|Optional $gameCenterLeaderboard = new Optional,
        public GameCenterLeaderboardLocalizationRelationshipsGameCenterLeaderboardImage|Optional $gameCenterLeaderboardImage = new Optional,
    ) {}
}
