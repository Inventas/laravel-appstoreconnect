<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AndroidToIosAppMappingDetailCreateRequest
 */
class AndroidToIosAppMappingDetailCreateRequest extends SpatieData
{
    public function __construct(
        public AndroidToIosAppMappingDetailCreateRequestData $data,
    ) {}
}
