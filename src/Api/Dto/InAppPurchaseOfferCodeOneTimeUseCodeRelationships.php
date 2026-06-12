<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeOneTimeUseCodeRelationships
 */
class InAppPurchaseOfferCodeOneTimeUseCodeRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeOneTimeUseCodeRelationshipsValues|Optional $values = new Optional,
        public InAppPurchaseOfferCodeOneTimeUseCodeRelationshipsCreatedByActor|Optional $createdByActor = new Optional,
        public InAppPurchaseOfferCodeOneTimeUseCodeRelationshipsDeactivatedByActor|Optional $deactivatedByActor = new Optional,
    ) {}
}
