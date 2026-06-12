<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BuildUploadRelationshipsAssetSpiFileData
 */
class BuildUploadRelationshipsAssetSpiFileData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
