<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeVersionReleaseCreateRequestData
 */
class GameCenterChallengeVersionReleaseCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterChallengeVersionReleaseCreateRequestDataRelationships $relationships,
    ) {}
}
