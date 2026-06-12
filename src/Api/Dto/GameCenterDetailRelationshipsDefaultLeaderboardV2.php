<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsDefaultLeaderboardV2
 */
class GameCenterDetailRelationshipsDefaultLeaderboardV2 extends SpatieData
{
    public function __construct(
        public GameCenterDetailRelationshipsDefaultLeaderboardV2data|Optional $data = new Optional,
    ) {}
}
