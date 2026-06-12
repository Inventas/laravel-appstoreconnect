<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseImageCreateRequest
 */
class InAppPurchaseImageCreateRequest extends SpatieData
{
    public function __construct(
        public InAppPurchaseImageCreateRequestData $data,
    ) {}
}
