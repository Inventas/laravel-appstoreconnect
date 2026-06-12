<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionReleaseRelationshipsVersion
 */
class GameCenterChallengeVersionReleaseRelationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterChallengeVersionReleaseRelationshipsVersionData|Optional $data = new Optional,
    ) {}
}
