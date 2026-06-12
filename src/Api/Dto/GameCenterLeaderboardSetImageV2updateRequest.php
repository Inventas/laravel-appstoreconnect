<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetImageV2UpdateRequest
 */
class GameCenterLeaderboardSetImageV2updateRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetImageV2updateRequestData $data,
    ) {}
}
