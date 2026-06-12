<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetMemberLocalizationAttributes
 */
class GameCenterLeaderboardSetMemberLocalizationAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $name = new Optional,
        public string|Optional $locale = new Optional,
    ) {}
}
