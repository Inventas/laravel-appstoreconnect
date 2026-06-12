<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferPriceInlineCreate
 */
class InAppPurchaseOfferPriceInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public InAppPurchaseOfferPriceInlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
