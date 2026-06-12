<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsDefaultGroupLeaderboardV2
 */
class GameCenterDetailRelationshipsDefaultGroupLeaderboardV2 extends SpatieData
{
    public function __construct(
        public GameCenterDetailRelationshipsDefaultGroupLeaderboardV2data|Optional $data = new Optional,
    ) {}
}
