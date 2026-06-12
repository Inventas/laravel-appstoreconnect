<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementVersionV2inlineCreateRelationshipsAchievement
 */
class GameCenterAchievementVersionV2inlineCreateRelationshipsAchievement extends SpatieData
{
    public function __construct(
        public GameCenterAchievementVersionV2inlineCreateRelationshipsAchievementData|Optional $data = new Optional,
    ) {}
}
