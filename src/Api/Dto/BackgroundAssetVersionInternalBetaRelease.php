<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionInternalBetaRelease
 */
class BackgroundAssetVersionInternalBetaRelease extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BackgroundAssetVersionInternalBetaReleaseAttributes|Optional $attributes = new Optional,
        public BackgroundAssetVersionInternalBetaReleaseRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
