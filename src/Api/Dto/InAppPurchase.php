<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchase
 */
class InAppPurchase extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchaseAttributes|Optional $attributes = new Optional,
        public InAppPurchaseRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
