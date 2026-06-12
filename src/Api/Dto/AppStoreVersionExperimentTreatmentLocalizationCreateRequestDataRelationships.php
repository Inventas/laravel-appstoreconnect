<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentTreatmentLocalizationCreateRequestDataRelationships
 */
class AppStoreVersionExperimentTreatmentLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentTreatmentLocalizationCreateRequestDataRelationshipsAppStoreVersionExperimentTreatment $appStoreVersionExperimentTreatment,
    ) {}
}
