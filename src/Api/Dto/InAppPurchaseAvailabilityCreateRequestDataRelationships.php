<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseAvailabilityCreateRequestDataRelationships
 */
class InAppPurchaseAvailabilityCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseAvailabilityCreateRequestDataRelationshipsInAppPurchase $inAppPurchase,
        public InAppPurchaseAvailabilityCreateRequestDataRelationshipsAvailableTerritories $availableTerritories,
    ) {}
}
