<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementImageRelationships
 */
class GameCenterAchievementImageRelationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementImageRelationshipsGameCenterAchievementLocalization|Optional $gameCenterAchievementLocalization = new Optional,
    ) {}
}
