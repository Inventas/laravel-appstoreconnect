<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeLocalizationCreateRequestDataRelationships
 */
class GameCenterChallengeLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public GameCenterChallengeLocalizationCreateRequestDataRelationshipsVersion $version,
    ) {}
}
