<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroupRelationships
 */
class GameCenterGroupRelationships extends SpatieData
{
    public function __construct(
        public GameCenterGroupRelationshipsGameCenterDetails|Optional $gameCenterDetails = new Optional,
        public GameCenterGroupRelationshipsGameCenterLeaderboards|Optional $gameCenterLeaderboards = new Optional,
        public GameCenterGroupRelationshipsGameCenterLeaderboardsV2|Optional $gameCenterLeaderboardsV2 = new Optional,
        public GameCenterGroupRelationshipsGameCenterLeaderboardSets|Optional $gameCenterLeaderboardSets = new Optional,
        public GameCenterGroupRelationshipsGameCenterLeaderboardSetsV2|Optional $gameCenterLeaderboardSetsV2 = new Optional,
        public GameCenterGroupRelationshipsGameCenterAchievements|Optional $gameCenterAchievements = new Optional,
        public GameCenterGroupRelationshipsGameCenterAchievementsV2|Optional $gameCenterAchievementsV2 = new Optional,
        public GameCenterGroupRelationshipsGameCenterActivities|Optional $gameCenterActivities = new Optional,
        public GameCenterGroupRelationshipsGameCenterChallenges|Optional $gameCenterChallenges = new Optional,
    ) {}
}
