<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationRelationships
 */
class GameCenterLeaderboardSetLocalizationRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetLocalizationRelationshipsGameCenterLeaderboardSet|Optional $gameCenterLeaderboardSet = new Optional,
        public GameCenterLeaderboardSetLocalizationRelationshipsGameCenterLeaderboardSetImage|Optional $gameCenterLeaderboardSetImage = new Optional,
    ) {}
}
