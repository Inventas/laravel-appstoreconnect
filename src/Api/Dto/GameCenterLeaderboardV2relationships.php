<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2relationships
 */
class GameCenterLeaderboardV2relationships extends SpatieData
{
    public function __construct(
        public GameCenterLeaderboardV2relationshipsGameCenterDetail|Optional $gameCenterDetail = new Optional,
        public GameCenterLeaderboardV2relationshipsGameCenterGroup|Optional $gameCenterGroup = new Optional,
        public GameCenterLeaderboardV2relationshipsGameCenterLeaderboardSets|Optional $gameCenterLeaderboardSets = new Optional,
        public GameCenterLeaderboardV2relationshipsActivity|Optional $activity = new Optional,
        public GameCenterLeaderboardV2relationshipsChallenge|Optional $challenge = new Optional,
        public GameCenterLeaderboardV2relationshipsVersions|Optional $versions = new Optional,
    ) {}
}
