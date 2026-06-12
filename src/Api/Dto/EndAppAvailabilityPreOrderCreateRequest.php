<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EndAppAvailabilityPreOrderCreateRequest
 */
class EndAppAvailabilityPreOrderCreateRequest extends SpatieData
{
    public function __construct(
        public EndAppAvailabilityPreOrderCreateRequestData $data,
    ) {}
}
