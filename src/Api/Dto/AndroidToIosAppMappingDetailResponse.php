<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AndroidToIosAppMappingDetailResponse
 */
class AndroidToIosAppMappingDetailResponse extends SpatieData
{
    public function __construct(
        public AndroidToIosAppMappingDetail $data,
        public DocumentLinks $links,
    ) {}
}
