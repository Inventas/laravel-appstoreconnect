<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentV2CreateRequest
 */
class AppStoreVersionExperimentV2createRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentV2createRequestData $data,
    ) {}
}
