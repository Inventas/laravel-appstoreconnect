<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardReleaseAttributes
 */
class GameCenterLeaderboardReleaseAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional $live = new Optional,
    ) {}
}
