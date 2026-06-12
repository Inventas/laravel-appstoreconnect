<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionInternalBetaReleaseRelationships
 */
class BackgroundAssetVersionInternalBetaReleaseRelationships extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionInternalBetaReleaseRelationshipsBackgroundAssetVersion|Optional $backgroundAssetVersion = new Optional,
    ) {}
}
