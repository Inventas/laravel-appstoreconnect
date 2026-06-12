<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionExternalBetaReleaseRelationships
 */
class BackgroundAssetVersionExternalBetaReleaseRelationships extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionExternalBetaReleaseRelationshipsBackgroundAssetVersion|Optional $backgroundAssetVersion = new Optional,
    ) {}
}
