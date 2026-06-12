<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * GameCenterGroup
 */
class GameCenterGroup extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public GameCenterGroupAttributes|Optional $attributes = new Optional,
        public GameCenterGroupRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
