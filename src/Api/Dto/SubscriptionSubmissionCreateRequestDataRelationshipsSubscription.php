<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionSubmissionCreateRequestDataRelationshipsSubscription
 */
class SubscriptionSubmissionCreateRequestDataRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionSubmissionCreateRequestDataRelationshipsSubscriptionData $data,
    ) {}
}
