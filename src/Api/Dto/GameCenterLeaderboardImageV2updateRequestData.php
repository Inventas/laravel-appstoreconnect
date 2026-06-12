<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardImageV2updateRequestData
 */
class GameCenterLeaderboardImageV2updateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterLeaderboardImageV2updateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
