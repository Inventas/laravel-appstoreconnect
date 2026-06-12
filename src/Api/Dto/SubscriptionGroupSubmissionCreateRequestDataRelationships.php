<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupSubmissionCreateRequestDataRelationships
 */
class SubscriptionGroupSubmissionCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionGroupSubmissionCreateRequestDataRelationshipsSubscriptionGroup $subscriptionGroup,
    ) {}
}
