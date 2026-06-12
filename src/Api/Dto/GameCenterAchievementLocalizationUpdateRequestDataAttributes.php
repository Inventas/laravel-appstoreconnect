<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationUpdateRequestDataAttributes
 */
class GameCenterAchievementLocalizationUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $name = new Optional,
        public string|Optional|null $beforeEarnedDescription = new Optional,
        public string|Optional|null $afterEarnedDescription = new Optional,
    ) {}
}
