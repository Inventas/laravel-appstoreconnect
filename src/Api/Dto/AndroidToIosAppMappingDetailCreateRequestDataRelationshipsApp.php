<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AndroidToIosAppMappingDetailCreateRequestDataRelationshipsApp
 */
class AndroidToIosAppMappingDetailCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public AndroidToIosAppMappingDetailCreateRequestDataRelationshipsAppData $data,
    ) {}
}
