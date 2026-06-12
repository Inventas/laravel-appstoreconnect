<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BuildUploadRelationships
 */
class BuildUploadRelationships extends SpatieData
{
    public function __construct(
        public BuildUploadRelationshipsBuild|Optional $build = new Optional,
        public BuildUploadRelationshipsAssetFile|Optional $assetFile = new Optional,
        public BuildUploadRelationshipsAssetDescriptionFile|Optional $assetDescriptionFile = new Optional,
        public BuildUploadRelationshipsAssetSpiFile|Optional $assetSpiFile = new Optional,
        public BuildUploadRelationshipsBuildUploadFiles|Optional $buildUploadFiles = new Optional,
    ) {}
}
