<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionExternalBetaReleaseRelationshipsBackgroundAssetVersion
 */
class BackgroundAssetVersionExternalBetaReleaseRelationshipsBackgroundAssetVersion extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionExternalBetaReleaseRelationshipsBackgroundAssetVersionData|Optional $data = new Optional,
    ) {}
}
