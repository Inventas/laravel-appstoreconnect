<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeVersionReleaseCreateRequestDataRelationships
 */
class GameCenterChallengeVersionReleaseCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterChallengeVersionReleaseCreateRequestDataRelationshipsGameCenterDetail $gameCenterDetail,
        public GameCenterChallengeVersionReleaseCreateRequestDataRelationshipsVersion $version,
    ) {}
}
