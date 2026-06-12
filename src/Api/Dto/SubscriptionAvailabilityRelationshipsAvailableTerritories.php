<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionAvailabilityRelationshipsAvailableTerritories
 */
class SubscriptionAvailabilityRelationshipsAvailableTerritories extends SpatieData
{
    /**
     * @param  array<int, SubscriptionAvailabilityRelationshipsAvailableTerritoriesDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, SubscriptionAvailabilityRelationshipsAvailableTerritoriesDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
