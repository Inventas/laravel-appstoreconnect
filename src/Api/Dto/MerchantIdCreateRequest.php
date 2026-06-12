<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MerchantIdCreateRequest
 */
class MerchantIdCreateRequest extends SpatieData
{
    public function __construct(
        public MerchantIdCreateRequestData $data,
    ) {}
}
