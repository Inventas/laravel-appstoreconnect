<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetUpdateRequestData
 */
class GameCenterLeaderboardSetUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterLeaderboardSetUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
