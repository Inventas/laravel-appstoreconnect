<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildUploadFileCreateRequestDataRelationships
 */
class BuildUploadFileCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public BuildUploadFileCreateRequestDataRelationshipsBuildUpload $buildUpload,
    ) {}
}
