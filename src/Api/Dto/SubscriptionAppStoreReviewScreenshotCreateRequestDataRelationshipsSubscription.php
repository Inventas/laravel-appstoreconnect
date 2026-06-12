<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionAppStoreReviewScreenshotCreateRequestDataRelationshipsSubscription
 */
class SubscriptionAppStoreReviewScreenshotCreateRequestDataRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public SubscriptionAppStoreReviewScreenshotCreateRequestDataRelationshipsSubscriptionData $data,
    ) {}
}
