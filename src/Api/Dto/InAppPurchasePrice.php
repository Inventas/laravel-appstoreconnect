<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePrice
 */
class InAppPurchasePrice extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchasePriceAttributes|Optional $attributes = new Optional,
        public InAppPurchasePriceRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
