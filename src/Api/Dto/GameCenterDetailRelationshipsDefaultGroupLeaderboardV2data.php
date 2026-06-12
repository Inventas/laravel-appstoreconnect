<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailRelationshipsDefaultGroupLeaderboardV2data
 */
class GameCenterDetailRelationshipsDefaultGroupLeaderboardV2data extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
