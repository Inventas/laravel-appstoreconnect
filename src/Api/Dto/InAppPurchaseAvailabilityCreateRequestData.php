<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseAvailabilityCreateRequestData
 */
class InAppPurchaseAvailabilityCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public InAppPurchaseAvailabilityCreateRequestDataAttributes $attributes,
        public InAppPurchaseAvailabilityCreateRequestDataRelationships $relationships,
    ) {}
}
