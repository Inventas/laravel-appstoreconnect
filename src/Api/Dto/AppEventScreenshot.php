<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventScreenshot
 */
class AppEventScreenshot extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppEventScreenshotAttributes|Optional $attributes = new Optional,
        public AppEventScreenshotRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
