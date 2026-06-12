<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardReleaseRelationshipsGameCenterDetail
 */
class GameCenterLeaderboardReleaseRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardReleaseRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
