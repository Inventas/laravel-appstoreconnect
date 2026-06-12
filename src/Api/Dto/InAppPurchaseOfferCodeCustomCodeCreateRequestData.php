<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeCustomCodeCreateRequestData
 */
class InAppPurchaseOfferCodeCustomCodeCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public InAppPurchaseOfferCodeCustomCodeCreateRequestDataAttributes $attributes,
        public InAppPurchaseOfferCodeCustomCodeCreateRequestDataRelationships $relationships,
    ) {}
}
