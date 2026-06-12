<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationV2relationshipsVersion
 */
class GameCenterAchievementLocalizationV2relationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterAchievementLocalizationV2relationshipsVersionData|Optional $data = new Optional,
    ) {}
}
