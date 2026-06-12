<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * TerritoryAvailabilityUpdateRequest
 */
class TerritoryAvailabilityUpdateRequest extends SpatieData
{
    public function __construct(
        public TerritoryAvailabilityUpdateRequestData $data,
    ) {}
}
