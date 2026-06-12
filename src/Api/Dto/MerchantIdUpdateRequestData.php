<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * MerchantIdUpdateRequestData
 */
class MerchantIdUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public MerchantIdUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
