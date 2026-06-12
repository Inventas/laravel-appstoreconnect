<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentRelationships
 */
class AppStoreVersionExperimentTreatmentRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentTreatmentRelationshipsAppStoreVersionExperiment|Optional $appStoreVersionExperiment = new Optional,
        public AppStoreVersionExperimentTreatmentRelationshipsAppStoreVersionExperimentV2|Optional $appStoreVersionExperimentV2 = new Optional,
        public AppStoreVersionExperimentTreatmentRelationshipsAppStoreVersionExperimentTreatmentLocalizations|Optional $appStoreVersionExperimentTreatmentLocalizations = new Optional,
    ) {}
}
