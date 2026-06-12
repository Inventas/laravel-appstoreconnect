<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentRelationshipsAppStoreVersionExperiment
 */
class AppStoreVersionExperimentTreatmentRelationshipsAppStoreVersionExperiment extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentTreatmentRelationshipsAppStoreVersionExperimentData|Optional $data = new Optional,
    ) {}
}
