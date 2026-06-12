<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentV2createRequestDataRelationships
 */
class AppStoreVersionExperimentV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentV2createRequestDataRelationshipsApp $app,
    ) {}
}
