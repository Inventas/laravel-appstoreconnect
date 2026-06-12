<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementReleaseCreateRequestDataRelationshipsGameCenterAchievement
 */
class GameCenterAchievementReleaseCreateRequestDataRelationshipsGameCenterAchievement extends SpatieData
{
    public function __construct(
        public GameCenterAchievementReleaseCreateRequestDataRelationshipsGameCenterAchievementData $data,
    ) {}
}
