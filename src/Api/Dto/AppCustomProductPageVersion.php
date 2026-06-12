<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersion
 */
class AppCustomProductPageVersion extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppCustomProductPageVersionAttributes|Optional $attributes = new Optional,
        public AppCustomProductPageVersionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
