<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeCreateRequestData
 */
class GameCenterChallengeCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public GameCenterChallengeCreateRequestDataAttributes $attributes,
        public GameCenterChallengeCreateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
