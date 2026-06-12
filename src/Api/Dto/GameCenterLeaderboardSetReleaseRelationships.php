<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetReleaseRelationships
 */
class GameCenterLeaderboardSetReleaseRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetReleaseRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterLeaderboardSetReleaseRelationshipsGameCenterLeaderboardSet|Optional $gameCenterLeaderboardSet = new Optional,
    ) {}
}
