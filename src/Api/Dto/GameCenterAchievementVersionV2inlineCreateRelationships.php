<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementVersionV2inlineCreateRelationships
 */
class GameCenterAchievementVersionV2inlineCreateRelationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementVersionV2inlineCreateRelationshipsAchievement|Optional $achievement = new Optional,
    ) {}
}
