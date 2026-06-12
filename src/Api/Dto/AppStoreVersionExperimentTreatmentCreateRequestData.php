<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentCreateRequestData
 */
class AppStoreVersionExperimentTreatmentCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppStoreVersionExperimentTreatmentCreateRequestDataAttributes $attributes,
        public AppStoreVersionExperimentTreatmentCreateRequestDataRelationships|Optional $relationships = new Optional,
    ) {}
}
