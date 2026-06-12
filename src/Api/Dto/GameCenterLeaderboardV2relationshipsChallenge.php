<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardV2relationshipsChallenge
 */
class GameCenterLeaderboardV2relationshipsChallenge extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterLeaderboardV2relationshipsChallengeData|Optional $data = new Optional,
    ) {}
}
