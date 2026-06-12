<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeOneTimeUseCodeRelationshipsCreatedByActor
 */
class InAppPurchaseOfferCodeOneTimeUseCodeRelationshipsCreatedByActor extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeOneTimeUseCodeRelationshipsCreatedByActorData|Optional $data = new Optional,
    ) {}
}
