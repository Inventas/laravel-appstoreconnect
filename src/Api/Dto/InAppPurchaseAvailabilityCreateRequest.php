<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseAvailabilityCreateRequest
 */
class InAppPurchaseAvailabilityCreateRequest extends SpatieData
{
    public function __construct(
        public InAppPurchaseAvailabilityCreateRequestData $data,
    ) {}
}
