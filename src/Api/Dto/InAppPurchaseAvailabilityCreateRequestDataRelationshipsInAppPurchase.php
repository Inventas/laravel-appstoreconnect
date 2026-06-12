<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseAvailabilityCreateRequestDataRelationshipsInAppPurchase
 */
class InAppPurchaseAvailabilityCreateRequestDataRelationshipsInAppPurchase extends SpatieData
{
    public function __construct(
        public InAppPurchaseAvailabilityCreateRequestDataRelationshipsInAppPurchaseData $data,
    ) {}
}
