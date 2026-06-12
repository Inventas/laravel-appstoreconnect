<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotSetCreateRequestDataRelationships
 */
class AppScreenshotSetCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppScreenshotSetCreateRequestDataRelationshipsAppStoreVersionLocalization|Optional $appStoreVersionLocalization = new Optional,
        public AppScreenshotSetCreateRequestDataRelationshipsAppCustomProductPageLocalization|Optional $appCustomProductPageLocalization = new Optional,
        public AppScreenshotSetCreateRequestDataRelationshipsAppStoreVersionExperimentTreatmentLocalization|Optional $appStoreVersionExperimentTreatmentLocalization = new Optional,
    ) {}
}
