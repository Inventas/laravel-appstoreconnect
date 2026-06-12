<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionRelationshipsManifestFile
 */
class BackgroundAssetVersionRelationshipsManifestFile extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionRelationshipsManifestFileData|Optional $data = new Optional,
    ) {}
}
