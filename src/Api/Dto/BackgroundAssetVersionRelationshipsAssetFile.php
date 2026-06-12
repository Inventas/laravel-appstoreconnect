<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionRelationshipsAssetFile
 */
class BackgroundAssetVersionRelationshipsAssetFile extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionRelationshipsAssetFileData|Optional $data = new Optional,
    ) {}
}
