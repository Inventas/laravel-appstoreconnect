<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardVersionV2CreateRequest
 */
class GameCenterLeaderboardVersionV2createRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardVersionV2createRequestData $data,
    ) {}
}
