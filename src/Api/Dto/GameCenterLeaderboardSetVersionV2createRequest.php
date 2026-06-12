<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetVersionV2CreateRequest
 */
class GameCenterLeaderboardSetVersionV2createRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetVersionV2createRequestData $data,
    ) {}
}
