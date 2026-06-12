<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentLocalizationRelationships
 */
class AppStoreVersionExperimentTreatmentLocalizationRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentTreatmentLocalizationRelationshipsAppStoreVersionExperimentTreatment|Optional $appStoreVersionExperimentTreatment = new Optional,
        public AppStoreVersionExperimentTreatmentLocalizationRelationshipsAppScreenshotSets|Optional $appScreenshotSets = new Optional,
        public AppStoreVersionExperimentTreatmentLocalizationRelationshipsAppPreviewSets|Optional $appPreviewSets = new Optional,
    ) {}
}
