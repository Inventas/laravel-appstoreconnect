<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEvent
 */
class AppEvent extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppEventAttributes|Optional $attributes = new Optional,
        public AppEventRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
