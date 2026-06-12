<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CiProduct
 */
class CiProduct extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public CiProductAttributes|Optional $attributes = new Optional,
        public CiProductRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
