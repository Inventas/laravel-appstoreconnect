<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardImageRelationships
 */
class GameCenterLeaderboardImageRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardImageRelationshipsGameCenterLeaderboardLocalization|Optional $gameCenterLeaderboardLocalization = new Optional,
    ) {}
}
