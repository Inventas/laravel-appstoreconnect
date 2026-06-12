<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetV2updateRequestDataAttributes
 */
class GameCenterLeaderboardSetV2updateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $referenceName = new Optional,
    ) {}
}
