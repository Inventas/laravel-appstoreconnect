<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentV2createRequestData
 */
class AppStoreVersionExperimentV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppStoreVersionExperimentV2createRequestDataAttributes $attributes,
        public AppStoreVersionExperimentV2createRequestDataRelationships $relationships,
    ) {}
}
