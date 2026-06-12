<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionInlineCreateRelationships
 */
class GameCenterChallengeVersionInlineCreateRelationships extends SpatieData
{
    public function __construct(
        public GameCenterChallengeVersionInlineCreateRelationshipsChallenge|Optional $challenge = new Optional,
    ) {}
}
