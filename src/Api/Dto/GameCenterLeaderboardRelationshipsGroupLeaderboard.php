<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterLeaderboardRelationshipsGroupLeaderboard
 */
class GameCenterLeaderboardRelationshipsGroupLeaderboard extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterLeaderboardRelationshipsGroupLeaderboardData|Optional $data = new Optional,
    ) {}
}
