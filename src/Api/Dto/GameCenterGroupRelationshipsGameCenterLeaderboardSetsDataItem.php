<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterGroupRelationshipsGameCenterLeaderboardSetsDataItem
 */
class GameCenterGroupRelationshipsGameCenterLeaderboardSetsDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
