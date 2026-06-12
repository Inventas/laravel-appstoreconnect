<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterLeaderboardSetsDataItem
 */
class GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterLeaderboardSetsDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
