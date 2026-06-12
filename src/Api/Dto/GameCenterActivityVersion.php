<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterActivityVersion
 */
class GameCenterActivityVersion extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterActivityVersionAttributes|Optional $attributes = new Optional,
        public GameCenterActivityVersionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
