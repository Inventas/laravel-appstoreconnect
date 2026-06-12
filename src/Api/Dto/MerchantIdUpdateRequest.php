<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MerchantIdUpdateRequest
 */
class MerchantIdUpdateRequest extends SpatieData
{
    public function __construct(
        public MerchantIdUpdateRequestData $data,
    ) {}
}
