<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterLeaderboardSetsDataItem
 */
class GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterLeaderboardSetsDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
