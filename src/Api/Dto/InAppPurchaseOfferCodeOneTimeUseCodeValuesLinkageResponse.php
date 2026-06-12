<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeOneTimeUseCodeValuesLinkageResponse
 */
class InAppPurchaseOfferCodeOneTimeUseCodeValuesLinkageResponse extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeOneTimeUseCodeValuesLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
