<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterDetailUpdateRequestDataRelationships
 */
class GameCenterDetailUpdateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterDetailUpdateRequestDataRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterDetailUpdateRequestDataRelationshipsDefaultLeaderboard|Optional $defaultLeaderboard = new Optional,
        public GameCenterDetailUpdateRequestDataRelationshipsDefaultLeaderboardV2|Optional $defaultLeaderboardV2 = new Optional,
        public GameCenterDetailUpdateRequestDataRelationshipsDefaultGroupLeaderboard|Optional $defaultGroupLeaderboard = new Optional,
        public GameCenterDetailUpdateRequestDataRelationshipsDefaultGroupLeaderboardV2|Optional $defaultGroupLeaderboardV2 = new Optional,
    ) {}
}
