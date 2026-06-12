<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2relationshipsGameCenterDetail
 */
class GameCenterLeaderboardV2relationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardV2relationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
