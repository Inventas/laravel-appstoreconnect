<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardReleaseCreateRequestDataRelationshipsGameCenterDetail
 */
class GameCenterLeaderboardReleaseCreateRequestDataRelationshipsGameCenterDetail extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardReleaseCreateRequestDataRelationshipsGameCenterDetailData $data,
    ) {}
}
