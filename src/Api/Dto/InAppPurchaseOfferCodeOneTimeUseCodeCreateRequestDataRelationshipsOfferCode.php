<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeOneTimeUseCodeCreateRequestDataRelationshipsOfferCode
 */
class InAppPurchaseOfferCodeOneTimeUseCodeCreateRequestDataRelationshipsOfferCode extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeOneTimeUseCodeCreateRequestDataRelationshipsOfferCodeData $data,
    ) {}
}
