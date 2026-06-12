<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationRelationships
 */
class GameCenterAchievementLocalizationRelationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementLocalizationRelationshipsGameCenterAchievement|Optional $gameCenterAchievement = new Optional,
        public GameCenterAchievementLocalizationRelationshipsGameCenterAchievementImage|Optional $gameCenterAchievementImage = new Optional,
    ) {}
}
