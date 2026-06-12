<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailRelationshipsDefaultLeaderboard
 */
class GameCenterDetailRelationshipsDefaultLeaderboard extends SpatieData
{
    public function __construct(
        public GameCenterDetailRelationshipsDefaultLeaderboardData|Optional $data = new Optional,
    ) {}
}
