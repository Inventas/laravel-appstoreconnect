<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventScreenshotRelationshipsAppEventLocalization
 */
class AppEventScreenshotRelationshipsAppEventLocalization extends SpatieData
{
    public function __construct(
        public AppEventScreenshotRelationshipsAppEventLocalizationData|Optional $data = new Optional,
    ) {}
}
