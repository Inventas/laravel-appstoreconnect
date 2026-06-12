<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseOfferCodeCustomCodeCreateRequest
 */
class InAppPurchaseOfferCodeCustomCodeCreateRequest extends SpatieData
{
    public function __construct(
        public InAppPurchaseOfferCodeCustomCodeCreateRequestData $data,
    ) {}
}
