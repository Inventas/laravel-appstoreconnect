<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterLeaderboardsDataItem
 */
class GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterLeaderboardsDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
