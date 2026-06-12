<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallenge
 */
class GameCenterChallenge extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterChallengeAttributes|Optional $attributes = new Optional,
        public GameCenterChallengeRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
