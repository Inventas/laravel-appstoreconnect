<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeLocalizationRelationshipsVersionData
 */
class GameCenterChallengeLocalizationRelationshipsVersionData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
