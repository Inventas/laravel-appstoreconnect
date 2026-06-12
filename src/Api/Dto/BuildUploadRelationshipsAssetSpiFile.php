<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUploadRelationshipsAssetSpiFile
 */
class BuildUploadRelationshipsAssetSpiFile extends SpatieData
{
    public function __construct(
        public BuildUploadRelationshipsAssetSpiFileData|Optional $data = new Optional,
    ) {}
}
