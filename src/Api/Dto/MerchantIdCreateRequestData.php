<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MerchantIdCreateRequestData
 */
class MerchantIdCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public MerchantIdCreateRequestDataAttributes $attributes,
    ) {}
}
