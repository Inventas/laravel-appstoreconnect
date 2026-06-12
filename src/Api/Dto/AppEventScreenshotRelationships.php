<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventScreenshotRelationships
 */
class AppEventScreenshotRelationships extends SpatieData
{
    public function __construct(
        public AppEventScreenshotRelationshipsAppEventLocalization|Optional $appEventLocalization = new Optional,
    ) {}
}
