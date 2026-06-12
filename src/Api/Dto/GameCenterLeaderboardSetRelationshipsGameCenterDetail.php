<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetRelationshipsGameCenterDetail
 */
class GameCenterLeaderboardSetRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
