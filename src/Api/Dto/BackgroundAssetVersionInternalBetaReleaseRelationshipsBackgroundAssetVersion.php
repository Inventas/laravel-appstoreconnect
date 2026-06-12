<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionInternalBetaReleaseRelationshipsBackgroundAssetVersion
 */
class BackgroundAssetVersionInternalBetaReleaseRelationshipsBackgroundAssetVersion extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionInternalBetaReleaseRelationshipsBackgroundAssetVersionData|Optional $data = new Optional,
    ) {}
}
