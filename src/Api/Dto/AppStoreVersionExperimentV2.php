<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionExperimentV2
 */
class AppStoreVersionExperimentV2 extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreVersionExperimentV2attributes|Optional $attributes = new Optional,
        public AppStoreVersionExperimentV2relationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
