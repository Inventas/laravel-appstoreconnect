<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterDetail
 */
class GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
