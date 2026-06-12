<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionAppStoreReleaseRelationshipsBackgroundAssetVersion
 */
class BackgroundAssetVersionAppStoreReleaseRelationshipsBackgroundAssetVersion extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionAppStoreReleaseRelationshipsBackgroundAssetVersionData|Optional $data = new Optional,
    ) {}
}
