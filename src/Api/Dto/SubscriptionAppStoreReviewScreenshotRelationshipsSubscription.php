<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionAppStoreReviewScreenshotRelationshipsSubscription
 */
class SubscriptionAppStoreReviewScreenshotRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionAppStoreReviewScreenshotRelationshipsSubscriptionData|Optional $data = new Optional,
    ) {}
}
