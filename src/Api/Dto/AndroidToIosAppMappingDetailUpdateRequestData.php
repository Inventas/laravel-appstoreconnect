<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AndroidToIosAppMappingDetailUpdateRequestData
 */
class AndroidToIosAppMappingDetailUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AndroidToIosAppMappingDetailUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
