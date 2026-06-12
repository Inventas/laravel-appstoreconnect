<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * EndAppAvailabilityPreOrderCreateRequestDataRelationshipsTerritoryAvailabilities
 */
class EndAppAvailabilityPreOrderCreateRequestDataRelationshipsTerritoryAvailabilities extends SpatieData
{
    /**
     * @param  array<int, EndAppAvailabilityPreOrderCreateRequestDataRelationshipsTerritoryAvailabilitiesDataItem>  $data
     */
    public function __construct(
        /** @var array<int, EndAppAvailabilityPreOrderCreateRequestDataRelationshipsTerritoryAvailabilitiesDataItem> */
        public array $data,
    ) {}
}
