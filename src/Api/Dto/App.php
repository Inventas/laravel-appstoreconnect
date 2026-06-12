<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * App
 */
class App extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppAttributes|Optional $attributes = new Optional,
        public AppRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
