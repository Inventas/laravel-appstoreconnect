<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentRelationshipsAppStoreVersion
 */
class AppStoreVersionExperimentRelationshipsAppStoreVersion extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentRelationshipsAppStoreVersionData|Optional $data = new Optional,
    ) {}
}
