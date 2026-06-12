<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGroupSubmissionCreateRequestDataRelationshipsSubscriptionGroup
 */
class SubscriptionGroupSubmissionCreateRequestDataRelationshipsSubscriptionGroup extends SpatieData
{
    public function __construct(
        public SubscriptionGroupSubmissionCreateRequestDataRelationshipsSubscriptionGroupData $data,
    ) {}
}
