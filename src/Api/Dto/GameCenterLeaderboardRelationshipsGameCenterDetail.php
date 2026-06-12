<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardRelationshipsGameCenterDetail
 */
class GameCenterLeaderboardRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
