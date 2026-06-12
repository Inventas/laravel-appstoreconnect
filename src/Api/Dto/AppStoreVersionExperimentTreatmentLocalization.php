<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentTreatmentLocalization
 */
class AppStoreVersionExperimentTreatmentLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreVersionExperimentTreatmentLocalizationAttributes|Optional $attributes = new Optional,
        public AppStoreVersionExperimentTreatmentLocalizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
