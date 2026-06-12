<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2createRequestDataRelationships
 */
class GameCenterLeaderboardV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardV2createRequestDataRelationshipsVersions $versions,
        public GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterLeaderboardV2createRequestDataRelationshipsGameCenterLeaderboardSets|Optional $gameCenterLeaderboardSets = new Optional,
    ) {}
}
