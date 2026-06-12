<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetV2UpdateRequest
 */
class GameCenterLeaderboardSetV2updateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetV2updateRequestData $data,
    ) {}
}
