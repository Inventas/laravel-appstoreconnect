<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentV2UpdateRequest
 */
class AppStoreVersionExperimentV2updateRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentV2updateRequestData $data,
    ) {}
}
