<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationV2createRequestDataAttributes
 */
class GameCenterLeaderboardSetLocalizationV2createRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $locale,
        public string $name,
    ) {}
}
