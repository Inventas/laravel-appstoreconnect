<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardLocalizationV2createRequestDataAttributes
 */
class GameCenterLeaderboardLocalizationV2createRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $locale,
        public string $name,
        public GameCenterLeaderboardFormatter|Optional $formatterOverride = new Optional,
        public string|Optional|null $formatterSuffix = new Optional,
        public string|Optional|null $formatterSuffixSingular = new Optional,
        public string|Optional|null $description = new Optional,
    ) {}
}
