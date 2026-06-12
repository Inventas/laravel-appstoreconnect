<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionRelationshipsExternalBetaRelease
 */
class BackgroundAssetVersionRelationshipsExternalBetaRelease extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionRelationshipsExternalBetaReleaseData|Optional $data = new Optional,
    ) {}
}
