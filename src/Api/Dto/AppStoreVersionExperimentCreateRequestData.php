<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentCreateRequestData
 */
class AppStoreVersionExperimentCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppStoreVersionExperimentCreateRequestDataAttributes $attributes,
        public AppStoreVersionExperimentCreateRequestDataRelationships $relationships,
    ) {}
}
