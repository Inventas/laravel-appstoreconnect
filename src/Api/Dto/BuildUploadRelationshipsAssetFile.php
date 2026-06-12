<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUploadRelationshipsAssetFile
 */
class BuildUploadRelationshipsAssetFile extends SpatieData
{
    public function __construct(
        public BuildUploadRelationshipsAssetFileData|Optional $data = new Optional,
    ) {}
}
