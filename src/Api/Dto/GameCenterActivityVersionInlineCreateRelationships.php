<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersionInlineCreateRelationships
 */
class GameCenterActivityVersionInlineCreateRelationships extends SpatieData
{
    public function __construct(
        public GameCenterActivityVersionInlineCreateRelationshipsActivity|Optional $activity = new Optional,
    ) {}
}
