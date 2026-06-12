<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotSetRelationshipsAppStoreVersionLocalization
 */
class AppScreenshotSetRelationshipsAppStoreVersionLocalization extends SpatieData
{
    public function __construct(
        public AppScreenshotSetRelationshipsAppStoreVersionLocalizationData|Optional $data = new Optional,
    ) {}
}
