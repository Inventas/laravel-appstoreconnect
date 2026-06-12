<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * GameCenterChallengeLocalizationCreateRequestData
 */
class GameCenterChallengeLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterChallengeLocalizationCreateRequestDataAttributes $attributes,
        public GameCenterChallengeLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
