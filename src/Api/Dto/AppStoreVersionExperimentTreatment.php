<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatment
 */
class AppStoreVersionExperimentTreatment extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreVersionExperimentTreatmentAttributes|Optional $attributes = new Optional,
        public AppStoreVersionExperimentTreatmentRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
