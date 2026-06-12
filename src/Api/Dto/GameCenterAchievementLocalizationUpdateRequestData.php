<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationUpdateRequestData
 */
class GameCenterAchievementLocalizationUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterAchievementLocalizationUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
