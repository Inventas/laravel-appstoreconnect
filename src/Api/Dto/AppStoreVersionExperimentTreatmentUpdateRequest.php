<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentTreatmentUpdateRequest
 */
class AppStoreVersionExperimentTreatmentUpdateRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentTreatmentUpdateRequestData $data,
    ) {}
}
