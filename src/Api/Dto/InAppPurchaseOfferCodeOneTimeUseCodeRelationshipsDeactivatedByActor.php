<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeOneTimeUseCodeRelationshipsDeactivatedByActor
 */
class InAppPurchaseOfferCodeOneTimeUseCodeRelationshipsDeactivatedByActor extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeOneTimeUseCodeRelationshipsDeactivatedByActorData|Optional $data = new Optional,
    ) {}
}
