<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionRelationships
 */
class GameCenterChallengeVersionRelationships extends SpatieData
{
    public function __construct(
        public GameCenterChallengeVersionRelationshipsChallenge|Optional $challenge = new Optional,
        public GameCenterChallengeVersionRelationshipsLocalizations|Optional $localizations = new Optional,
        public GameCenterChallengeVersionRelationshipsReleases|Optional $releases = new Optional,
        public GameCenterChallengeVersionRelationshipsDefaultImage|Optional $defaultImage = new Optional,
    ) {}
}
