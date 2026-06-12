<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BackgroundAssetVersion
 */
class BackgroundAssetVersion extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BackgroundAssetVersionAttributes|Optional $attributes = new Optional,
        public BackgroundAssetVersionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
