<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardUpdateRequest
 */
class GameCenterLeaderboardUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardUpdateRequestData $data,
    ) {}
}
