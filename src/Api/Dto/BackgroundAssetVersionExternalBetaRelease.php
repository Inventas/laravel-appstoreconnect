<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersionExternalBetaRelease
 */
class BackgroundAssetVersionExternalBetaRelease extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BackgroundAssetVersionExternalBetaReleaseAttributes|Optional $attributes = new Optional,
        public BackgroundAssetVersionExternalBetaReleaseRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
