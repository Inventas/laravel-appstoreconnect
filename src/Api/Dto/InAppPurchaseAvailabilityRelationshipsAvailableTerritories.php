<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseAvailabilityRelationshipsAvailableTerritories
 */
class InAppPurchaseAvailabilityRelationshipsAvailableTerritories extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseAvailabilityRelationshipsAvailableTerritoriesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, InAppPurchaseAvailabilityRelationshipsAvailableTerritoriesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
