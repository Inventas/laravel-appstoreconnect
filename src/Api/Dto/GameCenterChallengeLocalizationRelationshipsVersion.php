<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeLocalizationRelationshipsVersion
 */
class GameCenterChallengeLocalizationRelationshipsVersion extends SpatieData
{
    public function __construct(
        public GameCenterChallengeLocalizationRelationshipsVersionData|Optional $data = new Optional,
    ) {}
}
