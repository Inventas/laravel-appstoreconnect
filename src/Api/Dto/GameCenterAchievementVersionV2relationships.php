<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementVersionV2relationships
 */
class GameCenterAchievementVersionV2relationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementVersionV2relationshipsAchievement|Optional $achievement = new Optional,
        public GameCenterAchievementVersionV2relationshipsLocalizations|Optional $localizations = new Optional,
    ) {}
}
