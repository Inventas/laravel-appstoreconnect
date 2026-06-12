<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionExternalBetaReleaseAttributes
 */
class BackgroundAssetVersionExternalBetaReleaseAttributes extends SpatieData
{
    public function __construct(
        public BackgroundAssetVersionExternalBetaReleaseState|Optional $state = new Optional,
    ) {}
}
