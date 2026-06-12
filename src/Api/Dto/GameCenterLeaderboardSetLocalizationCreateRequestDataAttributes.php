<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetLocalizationCreateRequestDataAttributes
 */
class GameCenterLeaderboardSetLocalizationCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $locale,
        public string $name,
    ) {}
}
