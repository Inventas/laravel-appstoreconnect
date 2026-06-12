<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeUpdateRequestData
 */
class GameCenterChallengeUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterChallengeUpdateRequestDataAttributes|Optional $attributes = new Optional,
        public GameCenterChallengeUpdateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
