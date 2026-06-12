<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardSetV2createRequestDataRelationshipsVersionsDataItem
 */
class GameCenterLeaderboardSetV2createRequestDataRelationshipsVersionsDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
