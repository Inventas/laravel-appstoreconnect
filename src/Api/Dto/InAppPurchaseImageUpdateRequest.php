<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseImageUpdateRequest
 */
class InAppPurchaseImageUpdateRequest extends SpatieData
{
    public function __construct(
        public InAppPurchaseImageUpdateRequestData $data,
    ) {}
}
