<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionAppStoreReviewScreenshotRelationships
 */
class SubscriptionAppStoreReviewScreenshotRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionAppStoreReviewScreenshotRelationshipsSubscription|Optional $subscription = new Optional,
    ) {}
}
