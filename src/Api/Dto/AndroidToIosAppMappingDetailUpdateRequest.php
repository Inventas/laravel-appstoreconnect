<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AndroidToIosAppMappingDetailUpdateRequest
 */
class AndroidToIosAppMappingDetailUpdateRequest extends SpatieData
{
    public function __construct(
        public AndroidToIosAppMappingDetailUpdateRequestData $data,
    ) {}
}
