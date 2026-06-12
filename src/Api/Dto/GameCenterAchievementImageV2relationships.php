<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementImageV2relationships
 */
class GameCenterAchievementImageV2relationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementImageV2relationshipsLocalization|Optional $localization = new Optional,
    ) {}
}
