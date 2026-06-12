<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationV2relationships
 */
class GameCenterAchievementLocalizationV2relationships extends SpatieData
{
    public function __construct(
        public GameCenterAchievementLocalizationV2relationshipsVersion|Optional $version = new Optional,
        public GameCenterAchievementLocalizationV2relationshipsImage|Optional $image = new Optional,
    ) {}
}
