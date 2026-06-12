<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeVersionCreateRequestDataRelationshipsChallenge
 */
class GameCenterChallengeVersionCreateRequestDataRelationshipsChallenge extends SpatieData
{
    public function __construct(
        public GameCenterChallengeVersionCreateRequestDataRelationshipsChallengeData $data,
    ) {}
}
