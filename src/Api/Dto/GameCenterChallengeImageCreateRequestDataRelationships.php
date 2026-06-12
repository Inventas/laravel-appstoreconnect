<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeImageCreateRequestDataRelationships
 */
class GameCenterChallengeImageCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterChallengeImageCreateRequestDataRelationshipsLocalization|Optional $localization = new Optional,
        public GameCenterChallengeImageCreateRequestDataRelationshipsVersion|Optional $version = new Optional,
    ) {}
}
