<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardCreateRequestDataRelationships
 */
class GameCenterLeaderboardCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterLeaderboardCreateRequestDataRelationshipsGameCenterLeaderboardSets|Optional $gameCenterLeaderboardSets = new Optional,
    ) {}
}
