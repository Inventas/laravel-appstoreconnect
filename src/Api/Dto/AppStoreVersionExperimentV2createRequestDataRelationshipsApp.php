<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentV2createRequestDataRelationshipsApp
 */
class AppStoreVersionExperimentV2createRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentV2createRequestDataRelationshipsAppData $data,
    ) {}
}
