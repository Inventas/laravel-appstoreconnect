<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PromotedPurchase
 */
class PromotedPurchase extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public PromotedPurchaseAttributes|Optional $attributes = new Optional,
        public PromotedPurchaseRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
