<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardLocalizationUpdateRequestDataAttributes
 */
class GameCenterLeaderboardLocalizationUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $name = new Optional,
        public GameCenterLeaderboardFormatter|Optional $formatterOverride = new Optional,
        public string|Optional|null $formatterSuffix = new Optional,
        public string|Optional|null $formatterSuffixSingular = new Optional,
        public string|Optional|null $description = new Optional,
    ) {}
}
