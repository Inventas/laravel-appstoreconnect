<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardImageUpdateRequest
 */
class GameCenterLeaderboardImageUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardImageUpdateRequestData $data,
    ) {}
}
