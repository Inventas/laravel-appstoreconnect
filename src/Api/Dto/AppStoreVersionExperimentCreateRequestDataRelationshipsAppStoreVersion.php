<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentCreateRequestDataRelationshipsAppStoreVersion
 */
class AppStoreVersionExperimentCreateRequestDataRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentCreateRequestDataRelationshipsAppStoreVersionData $data,
    ) {}
}
