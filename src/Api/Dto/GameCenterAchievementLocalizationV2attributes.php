<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationV2attributes
 */
class GameCenterAchievementLocalizationV2attributes extends SpatieData
{
    public function __construct(
        public string|Optional $locale = new Optional,
        public string|Optional $name = new Optional,
        public string|Optional $beforeEarnedDescription = new Optional,
        public string|Optional $afterEarnedDescription = new Optional,
    ) {}
}
