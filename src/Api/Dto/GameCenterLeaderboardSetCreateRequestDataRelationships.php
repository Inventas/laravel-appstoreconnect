<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetCreateRequestDataRelationships
 */
class GameCenterLeaderboardSetCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetCreateRequestDataRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterLeaderboardSetCreateRequestDataRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterLeaderboardSetCreateRequestDataRelationshipsGameCenterLeaderboards|Optional $gameCenterLeaderboards = new Optional,
    ) {}
}
