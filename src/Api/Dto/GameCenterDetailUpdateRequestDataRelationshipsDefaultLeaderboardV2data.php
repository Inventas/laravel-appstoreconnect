<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterDetailUpdateRequestDataRelationshipsDefaultLeaderboardV2data
 */
class GameCenterDetailUpdateRequestDataRelationshipsDefaultLeaderboardV2data extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
