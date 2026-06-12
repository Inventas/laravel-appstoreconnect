<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2inAppPurchaseAvailabilityLinkageResponseData
 */
class InAppPurchaseV2inAppPurchaseAvailabilityLinkageResponseData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
