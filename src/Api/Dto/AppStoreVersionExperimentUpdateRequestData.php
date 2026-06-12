<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentUpdateRequestData
 */
class AppStoreVersionExperimentUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreVersionExperimentUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
