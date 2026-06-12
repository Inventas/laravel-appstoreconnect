<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeCustomCodeCreateRequestDataRelationshipsOfferCode
 */
class InAppPurchaseOfferCodeCustomCodeCreateRequestDataRelationshipsOfferCode extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeCustomCodeCreateRequestDataRelationshipsOfferCodeData $data,
    ) {}
}
