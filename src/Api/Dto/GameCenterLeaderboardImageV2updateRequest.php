<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardImageV2UpdateRequest
 */
class GameCenterLeaderboardImageV2updateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardImageV2updateRequestData $data,
    ) {}
}
