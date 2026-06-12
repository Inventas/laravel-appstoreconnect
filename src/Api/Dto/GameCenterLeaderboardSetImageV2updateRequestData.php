<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetImageV2updateRequestData
 */
class GameCenterLeaderboardSetImageV2updateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterLeaderboardSetImageV2updateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
