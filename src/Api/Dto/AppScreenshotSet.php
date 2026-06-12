<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotSet
 */
class AppScreenshotSet extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppScreenshotSetAttributes|Optional $attributes = new Optional,
        public AppScreenshotSetRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
