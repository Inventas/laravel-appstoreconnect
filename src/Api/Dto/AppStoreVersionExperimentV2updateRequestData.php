<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentV2updateRequestData
 */
class AppStoreVersionExperimentV2updateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreVersionExperimentV2updateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
