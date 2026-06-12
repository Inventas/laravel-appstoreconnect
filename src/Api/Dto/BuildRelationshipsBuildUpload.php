<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildRelationshipsBuildUpload
 */
class BuildRelationshipsBuildUpload extends SpatieData
{
    public function __construct(
        public BuildRelationshipsBuildUploadData|Optional $data = new Optional,
    ) {}
}
