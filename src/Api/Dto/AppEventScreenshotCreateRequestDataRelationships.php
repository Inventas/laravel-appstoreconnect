<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventScreenshotCreateRequestDataRelationships
 */
class AppEventScreenshotCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppEventScreenshotCreateRequestDataRelationshipsAppEventLocalization $appEventLocalization,
    ) {}
}
