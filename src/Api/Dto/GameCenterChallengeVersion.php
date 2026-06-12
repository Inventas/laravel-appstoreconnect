<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersion
 */
class GameCenterChallengeVersion extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterChallengeVersionAttributes|Optional $attributes = new Optional,
        public GameCenterChallengeVersionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
