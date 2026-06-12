<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterAchievementLocalizationV2updateRequestDataAttributes
 */
class GameCenterAchievementLocalizationV2updateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $name = new Optional,
        public string|Optional|null $beforeEarnedDescription = new Optional,
        public string|Optional|null $afterEarnedDescription = new Optional,
    ) {}
}
