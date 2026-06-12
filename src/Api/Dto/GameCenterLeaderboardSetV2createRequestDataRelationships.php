<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardSetV2createRequestDataRelationships
 */
class GameCenterLeaderboardSetV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardSetV2createRequestDataRelationshipsVersions $versions,
        public GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterLeaderboardSetV2createRequestDataRelationshipsGameCenterLeaderboards|Optional $gameCenterLeaderboards = new Optional,
    ) {}
}
