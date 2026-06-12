<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePricePointRelationships
 */
class InAppPurchasePricePointRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchasePricePointRelationshipsTerritory|Optional $territory = new Optional,
        public InAppPurchasePricePointRelationshipsEqualizations|Optional $equalizations = new Optional,
    ) {}
}
