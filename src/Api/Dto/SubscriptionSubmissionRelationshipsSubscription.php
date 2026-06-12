<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionSubmissionRelationshipsSubscription
 */
class SubscriptionSubmissionRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionSubmissionRelationshipsSubscriptionData|Optional $data = new Optional,
    ) {}
}
