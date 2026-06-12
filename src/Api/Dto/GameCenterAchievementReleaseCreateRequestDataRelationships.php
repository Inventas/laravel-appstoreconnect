<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementReleaseCreateRequestDataRelationships
 */
class GameCenterAchievementReleaseCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementReleaseCreateRequestDataRelationshipsGameCenterDetail $gameCenterDetail,
        public GameCenterAchievementReleaseCreateRequestDataRelationshipsGameCenterAchievement $gameCenterAchievement,
    ) {}
}
