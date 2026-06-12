<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailUpdateRequestDataRelationshipsDefaultGroupLeaderboardV2data
 */
class GameCenterDetailUpdateRequestDataRelationshipsDefaultGroupLeaderboardV2data extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
