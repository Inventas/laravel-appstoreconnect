<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetUpdateRequest
 */
class GameCenterLeaderboardSetUpdateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetUpdateRequestData $data,
    ) {}
}
