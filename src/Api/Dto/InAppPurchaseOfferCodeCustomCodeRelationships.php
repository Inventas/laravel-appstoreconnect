<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeCustomCodeRelationships
 */
class InAppPurchaseOfferCodeCustomCodeRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeCustomCodeRelationshipsCreatedByActor|Optional $createdByActor = new Optional,
        public InAppPurchaseOfferCodeCustomCodeRelationshipsDeactivatedByActor|Optional $deactivatedByActor = new Optional,
    ) {}
}
