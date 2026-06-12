<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailUpdateRequestDataRelationshipsDefaultLeaderboardV2
 */
class GameCenterDetailUpdateRequestDataRelationshipsDefaultLeaderboardV2 extends SpatieData
{
    public function __construct(
        public GameCenterDetailUpdateRequestDataRelationshipsDefaultLeaderboardV2data|Optional $data = new Optional,
    ) {}
}
