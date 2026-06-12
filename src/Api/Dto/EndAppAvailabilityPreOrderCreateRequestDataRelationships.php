<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EndAppAvailabilityPreOrderCreateRequestDataRelationships
 */
class EndAppAvailabilityPreOrderCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public EndAppAvailabilityPreOrderCreateRequestDataRelationshipsTerritoryAvailabilities $territoryAvailabilities,
    ) {}
}
