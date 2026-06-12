<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetVersionV2inlineCreateRelationships
 */
class GameCenterLeaderboardSetVersionV2inlineCreateRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetVersionV2inlineCreateRelationshipsLeaderboardSet|Optional $leaderboardSet = new Optional,
    ) {}
}
