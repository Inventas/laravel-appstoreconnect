<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityRelationships
 */
class GameCenterActivityRelationships extends SpatieData
{
    public function __construct(
        public GameCenterActivityRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterActivityRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterActivityRelationshipsAchievements|Optional $achievements = new Optional,
        public GameCenterActivityRelationshipsAchievementsV2|Optional $achievementsV2 = new Optional,
        public GameCenterActivityRelationshipsLeaderboards|Optional $leaderboards = new Optional,
        public GameCenterActivityRelationshipsLeaderboardsV2|Optional $leaderboardsV2 = new Optional,
        public GameCenterActivityRelationshipsVersions|Optional $versions = new Optional,
    ) {}
}
