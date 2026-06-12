<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeRelationshipsLeaderboard
 */
class GameCenterChallengeRelationshipsLeaderboard extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterChallengeRelationshipsLeaderboardData|Optional $data = new Optional,
    ) {}
}
