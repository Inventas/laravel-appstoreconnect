<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementVersionV2relationshipsAchievement
 */
class GameCenterAchievementVersionV2relationshipsAchievement extends SpatieData
{
    public function __construct(
        public GameCenterAchievementVersionV2relationshipsAchievementData|Optional $data = new Optional,
    ) {}
}
