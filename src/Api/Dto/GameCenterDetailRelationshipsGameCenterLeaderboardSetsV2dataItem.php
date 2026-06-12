<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailRelationshipsGameCenterLeaderboardSetsV2dataItem
 */
class GameCenterDetailRelationshipsGameCenterLeaderboardSetsV2dataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
