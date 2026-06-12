<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetReleaseAttributes
 */
class GameCenterLeaderboardSetReleaseAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional $live = new Optional,
    ) {}
}
