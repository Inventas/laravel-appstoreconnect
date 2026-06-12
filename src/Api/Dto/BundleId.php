<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BundleId
 */
class BundleId extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BundleIdAttributes|Optional $attributes = new Optional,
        public BundleIdRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
