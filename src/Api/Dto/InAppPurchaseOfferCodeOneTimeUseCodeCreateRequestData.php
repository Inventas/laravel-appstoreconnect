<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeOneTimeUseCodeCreateRequestData
 */
class InAppPurchaseOfferCodeOneTimeUseCodeCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public InAppPurchaseOfferCodeOneTimeUseCodeCreateRequestDataAttributes $attributes,
        public InAppPurchaseOfferCodeOneTimeUseCodeCreateRequestDataRelationships $relationships,
    ) {}
}
