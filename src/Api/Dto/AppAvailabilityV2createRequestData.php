<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppAvailabilityV2createRequestData
 */
class AppAvailabilityV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppAvailabilityV2createRequestDataAttributes $attributes,
        public AppAvailabilityV2createRequestDataRelationships $relationships,
    ) {}
}
