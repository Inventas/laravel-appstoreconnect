<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppScreenshotSetRelationshipsAppStoreVersionExperimentTreatmentLocalization
 */
class AppScreenshotSetRelationshipsAppStoreVersionExperimentTreatmentLocalization extends SpatieData
{
    public function __construct(
        public AppScreenshotSetRelationshipsAppStoreVersionExperimentTreatmentLocalizationData|Optional $data = new Optional,
    ) {}
}
