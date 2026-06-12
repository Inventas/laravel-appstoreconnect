<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardV2UpdateRequest
 */
class GameCenterLeaderboardV2updateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardV2updateRequestData $data,
    ) {}
}
