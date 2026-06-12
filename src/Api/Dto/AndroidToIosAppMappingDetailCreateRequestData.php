<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AndroidToIosAppMappingDetailCreateRequestData
 */
class AndroidToIosAppMappingDetailCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AndroidToIosAppMappingDetailCreateRequestDataAttributes $attributes,
        public AndroidToIosAppMappingDetailCreateRequestDataRelationships $relationships,
    ) {}
}
