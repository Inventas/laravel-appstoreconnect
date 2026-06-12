<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetMemberLocalizationRelationships
 */
class GameCenterLeaderboardSetMemberLocalizationRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetMemberLocalizationRelationshipsGameCenterLeaderboardSet|Optional $gameCenterLeaderboardSet = new Optional,
        public GameCenterLeaderboardSetMemberLocalizationRelationshipsGameCenterLeaderboard|Optional $gameCenterLeaderboard = new Optional,
    ) {}
}
