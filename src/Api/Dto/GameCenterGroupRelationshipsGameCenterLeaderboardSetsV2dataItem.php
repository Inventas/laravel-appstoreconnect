<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterGroupRelationshipsGameCenterLeaderboardSetsV2dataItem
 */
class GameCenterGroupRelationshipsGameCenterLeaderboardSetsV2dataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
