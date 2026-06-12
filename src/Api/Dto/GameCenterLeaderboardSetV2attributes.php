<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetV2attributes
 */
class GameCenterLeaderboardSetV2attributes extends SpatieData
{
    public function __construct(
        public string|Optional $referenceName = new Optional,
        public string|Optional $vendorIdentifier = new Optional,
    ) {}
}
