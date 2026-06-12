<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationCreateRequestDataAttributes
 */
class GameCenterAchievementLocalizationCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $locale,
        public string $name,
        public string $beforeEarnedDescription,
        public string $afterEarnedDescription,
    ) {}
}
