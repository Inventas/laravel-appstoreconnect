<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardLocalizationV2attributes
 */
class GameCenterLeaderboardLocalizationV2attributes extends SpatieData
{
    public function __construct(
        public string|Optional $locale = new Optional,
        public string|Optional $name = new Optional,
        public GameCenterLeaderboardFormatter|Optional $formatterOverride = new Optional,
        public string|Optional $formatterSuffix = new Optional,
        public string|Optional $formatterSuffixSingular = new Optional,
        public string|Optional $description = new Optional,
    ) {}
}
