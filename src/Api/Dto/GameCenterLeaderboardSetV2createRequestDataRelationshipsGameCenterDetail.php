<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterDetail
 */
class GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
