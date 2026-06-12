<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionRelationshipsChallenge
 */
class GameCenterChallengeVersionRelationshipsChallenge extends SpatieData
{
    public function __construct(
        public GameCenterChallengeVersionRelationshipsChallengeData|Optional $data = new Optional,
    ) {}
}
