<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPage
 */
class AppCustomProductPage extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppCustomProductPageAttributes|Optional $attributes = new Optional,
        public AppCustomProductPageRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
