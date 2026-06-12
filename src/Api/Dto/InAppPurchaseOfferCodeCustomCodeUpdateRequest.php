<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeCustomCodeUpdateRequest
 */
class InAppPurchaseOfferCodeCustomCodeUpdateRequest extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeCustomCodeUpdateRequestData $data,
    ) {}
}
