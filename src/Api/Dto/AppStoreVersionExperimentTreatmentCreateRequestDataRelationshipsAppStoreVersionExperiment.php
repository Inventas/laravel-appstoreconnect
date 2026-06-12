<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentCreateRequestDataRelationshipsAppStoreVersionExperiment
 */
class AppStoreVersionExperimentTreatmentCreateRequestDataRelationshipsAppStoreVersionExperiment extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentTreatmentCreateRequestDataRelationshipsAppStoreVersionExperimentData|Optional $data = new Optional,
    ) {}
}
