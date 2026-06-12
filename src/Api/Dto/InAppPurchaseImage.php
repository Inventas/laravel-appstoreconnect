<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseImage
 */
class InAppPurchaseImage extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchaseImageAttributes|Optional $attributes = new Optional,
        public InAppPurchaseImageRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
