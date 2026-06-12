<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementRelationships
 */
class GameCenterAchievementRelationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterAchievementRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterAchievementRelationshipsGroupAchievement|Optional $groupAchievement = new Optional,
        public GameCenterAchievementRelationshipsLocalizations|Optional $localizations = new Optional,
        public GameCenterAchievementRelationshipsReleases|Optional $releases = new Optional,
        public GameCenterAchievementRelationshipsActivity|Optional $activity = new Optional,
    ) {}
}
