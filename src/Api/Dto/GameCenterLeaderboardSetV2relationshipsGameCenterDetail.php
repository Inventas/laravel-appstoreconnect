<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetV2relationshipsGameCenterDetail
 */
class GameCenterLeaderboardSetV2relationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetV2relationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
