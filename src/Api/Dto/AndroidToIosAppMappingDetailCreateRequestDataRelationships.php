<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AndroidToIosAppMappingDetailCreateRequestDataRelationships
 */
class AndroidToIosAppMappingDetailCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AndroidToIosAppMappingDetailCreateRequestDataRelationshipsApp $app,
    ) {}
}
