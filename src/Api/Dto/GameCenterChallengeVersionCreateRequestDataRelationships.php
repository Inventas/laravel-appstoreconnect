<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeVersionCreateRequestDataRelationships
 */
class GameCenterChallengeVersionCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterChallengeVersionCreateRequestDataRelationshipsChallenge $challenge,
    ) {}
}
