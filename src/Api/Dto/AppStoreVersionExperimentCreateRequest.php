<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreVersionExperimentCreateRequest
 */
class AppStoreVersionExperimentCreateRequest extends SpatieData
{
    public function __construct(
        public AppStoreVersionExperimentCreateRequestData $data,
    ) {}
}
