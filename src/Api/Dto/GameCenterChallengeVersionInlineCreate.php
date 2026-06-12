<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterChallengeVersionInlineCreate
 */
class GameCenterChallengeVersionInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public GameCenterChallengeVersionInlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
