<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardRelationshipsChallenge
 */
class GameCenterLeaderboardRelationshipsChallenge extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterLeaderboardRelationshipsChallengeData|Optional $data = new Optional,
    ) {}
}
