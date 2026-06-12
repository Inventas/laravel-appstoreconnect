<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionRelationshipsInternalBetaRelease
 */
class BackgroundAssetVersionRelationshipsInternalBetaRelease extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionRelationshipsInternalBetaReleaseData|Optional $data = new Optional,
    ) {}
}
