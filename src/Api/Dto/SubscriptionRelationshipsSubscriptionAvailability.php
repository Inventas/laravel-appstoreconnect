<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionRelationshipsSubscriptionAvailability
 */
class SubscriptionRelationshipsSubscriptionAvailability extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public SubscriptionRelationshipsSubscriptionAvailabilityData|Optional $data = new Optional,
    ) {}
}
