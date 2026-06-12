<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentCreateRequestDataRelationships
 */
class AppStoreVersionExperimentCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentCreateRequestDataRelationshipsAppStoreVersion $appStoreVersion,
    ) {}
}
