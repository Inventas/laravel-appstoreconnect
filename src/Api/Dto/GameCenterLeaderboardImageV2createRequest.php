<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardImageV2CreateRequest
 */
class GameCenterLeaderboardImageV2createRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardImageV2createRequestData $data,
    ) {}
}
