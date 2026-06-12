<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPlanAvailabilityRelationshipsAvailableTerritories
 */
class SubscriptionPlanAvailabilityRelationshipsAvailableTerritories extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPlanAvailabilityRelationshipsAvailableTerritoriesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, SubscriptionPlanAvailabilityRelationshipsAvailableTerritoriesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
