<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotSetCreateRequestDataRelationshipsAppStoreVersionExperimentTreatmentLocalization
 */
class AppScreenshotSetCreateRequestDataRelationshipsAppStoreVersionExperimentTreatmentLocalization extends SpatieData
{
    public function __construct(
        public AppScreenshotSetCreateRequestDataRelationshipsAppStoreVersionExperimentTreatmentLocalizationData|Optional $data = new Optional,
    ) {}
}
