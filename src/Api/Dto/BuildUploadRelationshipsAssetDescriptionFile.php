<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUploadRelationshipsAssetDescriptionFile
 */
class BuildUploadRelationshipsAssetDescriptionFile extends SpatieData
{
    public function __construct(
        public BuildUploadRelationshipsAssetDescriptionFileData|Optional $data = new Optional,
    ) {}
}
