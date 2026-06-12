<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentCreateRequestDataRelationships
 */
class AppStoreVersionExperimentTreatmentCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentTreatmentCreateRequestDataRelationshipsAppStoreVersionExperiment|Optional $appStoreVersionExperiment = new Optional,
        public AppStoreVersionExperimentTreatmentCreateRequestDataRelationshipsAppStoreVersionExperimentV2|Optional $appStoreVersionExperimentV2 = new Optional,
    ) {}
}
