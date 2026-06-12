<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionInlineCreateRelationshipsChallenge
 */
class GameCenterChallengeVersionInlineCreateRelationshipsChallenge extends SpatieData
{
    public function __construct(
        public GameCenterChallengeVersionInlineCreateRelationshipsChallengeData|Optional $data = new Optional,
    ) {}
}
