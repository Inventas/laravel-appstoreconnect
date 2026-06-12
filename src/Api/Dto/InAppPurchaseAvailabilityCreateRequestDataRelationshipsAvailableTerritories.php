<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseAvailabilityCreateRequestDataRelationshipsAvailableTerritories
 */
class InAppPurchaseAvailabilityCreateRequestDataRelationshipsAvailableTerritories extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseAvailabilityCreateRequestDataRelationshipsAvailableTerritoriesDataItem>  $data
     */
    public function __construct(
        /** @var array<int, InAppPurchaseAvailabilityCreateRequestDataRelationshipsAvailableTerritoriesDataItem> */
        public array $data,
    ) {}
}
