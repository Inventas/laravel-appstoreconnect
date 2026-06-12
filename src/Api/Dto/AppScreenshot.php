<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshot
 */
class AppScreenshot extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppScreenshotAttributes|Optional $attributes = new Optional,
        public AppScreenshotRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
