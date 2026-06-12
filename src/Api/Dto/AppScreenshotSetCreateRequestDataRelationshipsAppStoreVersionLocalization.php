<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotSetCreateRequestDataRelationshipsAppStoreVersionLocalization
 */
class AppScreenshotSetCreateRequestDataRelationshipsAppStoreVersionLocalization extends SpatieData
{
    public function __construct(
        public AppScreenshotSetCreateRequestDataRelationshipsAppStoreVersionLocalizationData|Optional $data = new Optional,
    ) {}
}
