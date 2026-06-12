<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementReleaseRelationships
 */
class GameCenterAchievementReleaseRelationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementReleaseRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterAchievementReleaseRelationshipsGameCenterAchievement|Optional $gameCenterAchievement = new Optional,
    ) {}
}
