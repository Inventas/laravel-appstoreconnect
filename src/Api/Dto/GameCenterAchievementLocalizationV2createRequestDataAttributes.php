<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterAchievementLocalizationV2createRequestDataAttributes
 */
class GameCenterAchievementLocalizationV2createRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $locale,
        public string $name,
        public string $beforeEarnedDescription,
        public string $afterEarnedDescription,
    ) {}
}
