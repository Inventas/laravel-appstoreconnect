<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetReleaseCreateRequestDataRelationshipsGameCenterDetail
 */
class GameCenterLeaderboardSetReleaseCreateRequestDataRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetReleaseCreateRequestDataRelationshipsGameCenterDetailData $data,
    ) {}
}
