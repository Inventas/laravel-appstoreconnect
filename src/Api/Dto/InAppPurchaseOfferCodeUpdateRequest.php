<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeUpdateRequest
 */
class InAppPurchaseOfferCodeUpdateRequest extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeUpdateRequestData $data,
    ) {}
}
