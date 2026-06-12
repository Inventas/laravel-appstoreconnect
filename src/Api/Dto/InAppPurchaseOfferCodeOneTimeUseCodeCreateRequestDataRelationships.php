<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeOneTimeUseCodeCreateRequestDataRelationships
 */
class InAppPurchaseOfferCodeOneTimeUseCodeCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeOneTimeUseCodeCreateRequestDataRelationshipsOfferCode $offerCode,
    ) {}
}
