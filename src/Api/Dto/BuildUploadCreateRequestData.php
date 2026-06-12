<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildUploadCreateRequestData
 */
class BuildUploadCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BuildUploadCreateRequestDataAttributes $attributes,
        public BuildUploadCreateRequestDataRelationships $relationships,
    ) {}
}
