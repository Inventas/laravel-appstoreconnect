<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementImageV2relationshipsLocalization
 */
class GameCenterAchievementImageV2relationshipsLocalization extends SpatieData
{
    public function __construct(
        public GameCenterAchievementImageV2relationshipsLocalizationData|Optional $data = new Optional,
    ) {}
}
