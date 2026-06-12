<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2inAppPurchaseAvailabilityLinkageResponse
 */
class InAppPurchaseV2inAppPurchaseAvailabilityLinkageResponse extends SpatieData
{
    public function __construct(
        public InAppPurchaseV2inAppPurchaseAvailabilityLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
