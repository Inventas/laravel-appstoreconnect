<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeCreateRequestData
 */
class InAppPurchaseOfferCodeCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public InAppPurchaseOfferCodeCreateRequestDataAttributes $attributes,
        public InAppPurchaseOfferCodeCreateRequestDataRelationships $relationships,
    ) {}
}
