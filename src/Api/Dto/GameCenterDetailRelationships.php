<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationships
 */
class GameCenterDetailRelationships extends SpatieData
{
    public function __construct(
        public GameCenterDetailRelationshipsApp|Optional $app = new Optional,
        public GameCenterDetailRelationshipsGameCenterAppVersions|Optional $gameCenterAppVersions = new Optional,
        public GameCenterDetailRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterDetailRelationshipsGameCenterLeaderboards|Optional $gameCenterLeaderboards = new Optional,
        public GameCenterDetailRelationshipsGameCenterLeaderboardsV2|Optional $gameCenterLeaderboardsV2 = new Optional,
        public GameCenterDetailRelationshipsGameCenterLeaderboardSets|Optional $gameCenterLeaderboardSets = new Optional,
        public GameCenterDetailRelationshipsGameCenterLeaderboardSetsV2|Optional $gameCenterLeaderboardSetsV2 = new Optional,
        public GameCenterDetailRelationshipsGameCenterAchievements|Optional $gameCenterAchievements = new Optional,
        public GameCenterDetailRelationshipsGameCenterAchievementsV2|Optional $gameCenterAchievementsV2 = new Optional,
        public GameCenterDetailRelationshipsGameCenterActivities|Optional $gameCenterActivities = new Optional,
        public GameCenterDetailRelationshipsGameCenterChallenges|Optional $gameCenterChallenges = new Optional,
        public GameCenterDetailRelationshipsDefaultLeaderboard|Optional $defaultLeaderboard = new Optional,
        public GameCenterDetailRelationshipsDefaultLeaderboardV2|Optional $defaultLeaderboardV2 = new Optional,
        public GameCenterDetailRelationshipsDefaultGroupLeaderboard|Optional $defaultGroupLeaderboard = new Optional,
        public GameCenterDetailRelationshipsDefaultGroupLeaderboardV2|Optional $defaultGroupLeaderboardV2 = new Optional,
        public GameCenterDetailRelationshipsAchievementReleases|Optional $achievementReleases = new Optional,
        public GameCenterDetailRelationshipsActivityReleases|Optional $activityReleases = new Optional,
        public GameCenterDetailRelationshipsChallengeReleases|Optional $challengeReleases = new Optional,
        public GameCenterDetailRelationshipsLeaderboardReleases|Optional $leaderboardReleases = new Optional,
        public GameCenterDetailRelationshipsLeaderboardSetReleases|Optional $leaderboardSetReleases = new Optional,
        public GameCenterDetailRelationshipsChallengesMinimumPlatformVersions|Optional $challengesMinimumPlatformVersions = new Optional,
    ) {}
}
