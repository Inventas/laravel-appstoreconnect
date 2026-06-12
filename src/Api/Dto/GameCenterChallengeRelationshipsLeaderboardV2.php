<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeRelationshipsLeaderboardV2
 */
class GameCenterChallengeRelationshipsLeaderboardV2 extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public GameCenterChallengeRelationshipsLeaderboardV2data|Optional $data = new Optional,
    ) {}
}
