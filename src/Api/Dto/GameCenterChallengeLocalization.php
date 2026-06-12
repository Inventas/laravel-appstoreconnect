<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeLocalization
 */
class GameCenterChallengeLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterChallengeLocalizationAttributes|Optional $attributes = new Optional,
        public GameCenterChallengeLocalizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
