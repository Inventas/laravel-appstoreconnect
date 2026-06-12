<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppAvailabilityV2createRequestDataRelationships
 */
class AppAvailabilityV2createRequestDataRelationships extends SpatieData
{
    public function __construct(
        public AppAvailabilityV2createRequestDataRelationshipsApp $app,
        public AppAvailabilityV2createRequestDataRelationshipsTerritoryAvailabilities $territoryAvailabilities,
    ) {}
}
