<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentTreatmentLocalizationCreateRequest
 */
class AppStoreVersionExperimentTreatmentLocalizationCreateRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentTreatmentLocalizationCreateRequestData $data,
    ) {}
}
