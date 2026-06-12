<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperiment
 */
class AppStoreVersionExperiment extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreVersionExperimentAttributes|Optional $attributes = new Optional,
        public AppStoreVersionExperimentRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
