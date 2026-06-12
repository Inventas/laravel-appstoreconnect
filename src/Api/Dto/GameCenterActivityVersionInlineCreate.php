<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionInlineCreate
 */
class GameCenterActivityVersionInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public GameCenterActivityVersionInlineCreateAttributes|Optional $attributes = new Optional,
        public GameCenterActivityVersionInlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
