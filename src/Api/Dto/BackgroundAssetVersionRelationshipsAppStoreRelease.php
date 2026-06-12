<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionRelationshipsAppStoreRelease
 */
class BackgroundAssetVersionRelationshipsAppStoreRelease extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionRelationshipsAppStoreReleaseData|Optional $data = new Optional,
    ) {}
}
