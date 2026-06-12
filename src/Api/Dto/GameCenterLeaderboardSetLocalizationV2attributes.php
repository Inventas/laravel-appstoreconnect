<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetLocalizationV2attributes
 */
class GameCenterLeaderboardSetLocalizationV2attributes extends SpatieData
{
    public function __construct(
        public string|Optional $locale = new Optional,
        public string|Optional $name = new Optional,
    ) {}
}
