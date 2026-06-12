<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppEventScreenshotCreateRequestDataRelationshipsAppEventLocalization
 */
class AppEventScreenshotCreateRequestDataRelationshipsAppEventLocalization extends SpatieData
{
    public function __construct(
        public AppEventScreenshotCreateRequestDataRelationshipsAppEventLocalizationData $data,
    ) {}
}
