<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotSetRelationships
 */
class AppScreenshotSetRelationships extends SpatieData
{
    public function __construct(
        public AppScreenshotSetRelationshipsAppStoreVersionLocalization|Optional $appStoreVersionLocalization = new Optional,
        public AppScreenshotSetRelationshipsAppCustomProductPageLocalization|Optional $appCustomProductPageLocalization = new Optional,
        public AppScreenshotSetRelationshipsAppStoreVersionExperimentTreatmentLocalization|Optional $appStoreVersionExperimentTreatmentLocalization = new Optional,
        public AppScreenshotSetRelationshipsAppScreenshots|Optional $appScreenshots = new Optional,
    ) {}
}
