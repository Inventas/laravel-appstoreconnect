<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetReleaseRelationshipsGameCenterDetail
 */
class GameCenterLeaderboardSetReleaseRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetReleaseRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
