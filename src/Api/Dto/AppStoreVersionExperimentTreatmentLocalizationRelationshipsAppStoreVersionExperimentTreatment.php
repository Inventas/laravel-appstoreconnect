<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentLocalizationRelationshipsAppStoreVersionExperimentTreatment
 */
class AppStoreVersionExperimentTreatmentLocalizationRelationshipsAppStoreVersionExperimentTreatment extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentTreatmentLocalizationRelationshipsAppStoreVersionExperimentTreatmentData|Optional $data = new Optional,
    ) {}
}
