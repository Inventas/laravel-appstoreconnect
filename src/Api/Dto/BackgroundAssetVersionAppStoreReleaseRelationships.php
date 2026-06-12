<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionAppStoreReleaseRelationships
 */
class BackgroundAssetVersionAppStoreReleaseRelationships extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionAppStoreReleaseRelationshipsBackgroundAssetVersion|Optional $backgroundAssetVersion = new Optional,
    ) {}
}
