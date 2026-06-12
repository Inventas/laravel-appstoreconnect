<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionReleaseRelationships
 */
class GameCenterChallengeVersionReleaseRelationships extends SpatieData
{
    public function __construct(
        public GameCenterChallengeVersionReleaseRelationshipsVersion|Optional $version = new Optional,
    ) {}
}
