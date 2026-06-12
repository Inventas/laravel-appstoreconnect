<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetCreateRequestDataRelationshipsGameCenterDetail
 */
class GameCenterLeaderboardSetCreateRequestDataRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetCreateRequestDataRelationshipsGameCenterDetailData|Optional $data = new Optional,
    ) {}
}
