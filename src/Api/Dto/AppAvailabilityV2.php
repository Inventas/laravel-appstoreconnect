<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAvailabilityV2
 */
class AppAvailabilityV2 extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppAvailabilityV2attributes|Optional $attributes = new Optional,
        public AppAvailabilityV2relationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
