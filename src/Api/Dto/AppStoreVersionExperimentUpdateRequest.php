<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentUpdateRequest
 */
class AppStoreVersionExperimentUpdateRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentUpdateRequestData $data,
    ) {}
}
