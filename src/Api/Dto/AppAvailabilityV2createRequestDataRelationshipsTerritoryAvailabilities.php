<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppAvailabilityV2createRequestDataRelationshipsTerritoryAvailabilities
 */
class AppAvailabilityV2createRequestDataRelationshipsTerritoryAvailabilities extends SpatieData
{
    /**
     * @param  array<int, AppAvailabilityV2createRequestDataRelationshipsTerritoryAvailabilitiesDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppAvailabilityV2createRequestDataRelationshipsTerritoryAvailabilitiesDataItem> */
        public array $data,
    ) {}
}
