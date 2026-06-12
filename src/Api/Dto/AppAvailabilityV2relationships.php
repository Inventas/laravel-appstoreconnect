<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAvailabilityV2relationships
 */
class AppAvailabilityV2relationships extends SpatieData
{
    public function __construct(
        public AppAvailabilityV2relationshipsTerritoryAvailabilities|Optional $territoryAvailabilities = new Optional,
    ) {}
}
