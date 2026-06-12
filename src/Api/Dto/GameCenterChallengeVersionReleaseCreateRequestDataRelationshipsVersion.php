<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeVersionReleaseCreateRequestDataRelationshipsVersion
 */
class GameCenterChallengeVersionReleaseCreateRequestDataRelationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterChallengeVersionReleaseCreateRequestDataRelationshipsVersionData $data,
    ) {}
}
