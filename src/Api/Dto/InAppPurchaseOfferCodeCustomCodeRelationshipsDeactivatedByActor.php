<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeCustomCodeRelationshipsDeactivatedByActor
 */
class InAppPurchaseOfferCodeCustomCodeRelationshipsDeactivatedByActor extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeCustomCodeRelationshipsDeactivatedByActorData|Optional $data = new Optional,
    ) {}
}
