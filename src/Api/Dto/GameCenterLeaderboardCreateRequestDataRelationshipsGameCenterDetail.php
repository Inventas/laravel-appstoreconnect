<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterDetail
 */
class GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
