<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EndAppAvailabilityPreOrderCreateRequestData
 */
class EndAppAvailabilityPreOrderCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public EndAppAvailabilityPreOrderCreateRequestDataRelationships $relationships,
    ) {}
}
