<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionSubmissionRelationships
 */
class SubscriptionSubmissionRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionSubmissionRelationshipsSubscription|Optional $subscription = new Optional,
    ) {}
}
