<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationCreateRequestDataRelationships
 */
class GameCenterAchievementLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementLocalizationCreateRequestDataRelationshipsGameCenterAchievement $gameCenterAchievement,
    ) {}
}
