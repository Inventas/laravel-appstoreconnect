<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetImageV2CreateRequest
 */
class GameCenterLeaderboardSetImageV2createRequest extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetImageV2createRequestData $data,
    ) {}
}
