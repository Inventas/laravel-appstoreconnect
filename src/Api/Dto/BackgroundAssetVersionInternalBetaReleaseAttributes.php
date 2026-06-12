<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionInternalBetaReleaseAttributes
 */
class BackgroundAssetVersionInternalBetaReleaseAttributes extends SpatieData
{
    public function __construct(
        public string|Optional $state = new Optional,
    ) {}
}
