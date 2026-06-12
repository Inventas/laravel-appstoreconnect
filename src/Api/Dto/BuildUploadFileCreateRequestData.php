<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildUploadFileCreateRequestData
 */
class BuildUploadFileCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public BuildUploadFileCreateRequestDataAttributes $attributes,
        public BuildUploadFileCreateRequestDataRelationships $relationships,
    ) {}
}
