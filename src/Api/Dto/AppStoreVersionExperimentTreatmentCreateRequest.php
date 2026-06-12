<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentTreatmentCreateRequest
 */
class AppStoreVersionExperimentTreatmentCreateRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentTreatmentCreateRequestData $data,
    ) {}
}
