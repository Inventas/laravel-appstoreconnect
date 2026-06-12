<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * MerchantIdCreateRequestDataAttributes
 */
class MerchantIdCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string $name,
        public string $identifier,
    ) {}
}
