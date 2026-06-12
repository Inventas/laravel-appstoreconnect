<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterLeaderboardV2relationshipsGameCenterLeaderboardSetsDataItem
 */
class GameCenterLeaderboardV2relationshipsGameCenterLeaderboardSetsDataItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
