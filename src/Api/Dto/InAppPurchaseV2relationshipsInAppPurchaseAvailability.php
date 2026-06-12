<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2relationshipsInAppPurchaseAvailability
 */
class InAppPurchaseV2relationshipsInAppPurchaseAvailability extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public InAppPurchaseV2relationshipsInAppPurchaseAvailabilityData|Optional $data = new Optional,
    ) {}
}
