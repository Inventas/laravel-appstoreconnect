<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailUpdateRequestDataRelationshipsDefaultGroupLeaderboardV2
 */
class GameCenterDetailUpdateRequestDataRelationshipsDefaultGroupLeaderboardV2 extends SpatieData
{
    public function __construct(
        public GameCenterDetailUpdateRequestDataRelationshipsDefaultGroupLeaderboardV2data|Optional $data = new Optional,
    ) {}
}
