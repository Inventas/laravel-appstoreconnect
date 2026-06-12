<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetImageUpdateRequestData
 */
class GameCenterLeaderboardSetImageUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterLeaderboardSetImageUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
