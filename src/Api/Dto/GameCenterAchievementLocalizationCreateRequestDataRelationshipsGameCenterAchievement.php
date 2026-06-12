<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationCreateRequestDataRelationshipsGameCenterAchievement
 */
class GameCenterAchievementLocalizationCreateRequestDataRelationshipsGameCenterAchievement extends SpatieData
{
    public function __construct(
        public GameCenterAchievementLocalizationCreateRequestDataRelationshipsGameCenterAchievementData $data,
    ) {}
}
