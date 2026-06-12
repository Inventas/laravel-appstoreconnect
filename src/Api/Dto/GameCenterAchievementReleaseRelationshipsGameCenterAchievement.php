<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementReleaseRelationshipsGameCenterAchievement
 */
class GameCenterAchievementReleaseRelationshipsGameCenterAchievement extends SpatieData
{
    public function __construct(
        public GameCenterAchievementReleaseRelationshipsGameCenterAchievementData|Optional $data = new Optional,
    ) {}
}
