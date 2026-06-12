<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeLocalizationRelationships
 */
class GameCenterChallengeLocalizationRelationships extends SpatieData
{
    public function __construct(
        public GameCenterChallengeLocalizationRelationshipsVersion|Optional $version = new Optional,
        public GameCenterChallengeLocalizationRelationshipsImage|Optional $image = new Optional,
    ) {}
}
