<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionAppStoreReviewScreenshotCreateRequestData
 */
class SubscriptionAppStoreReviewScreenshotCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public SubscriptionAppStoreReviewScreenshotCreateRequestDataAttributes $attributes,
        public SubscriptionAppStoreReviewScreenshotCreateRequestDataRelationships $relationships,
    ) {}
}
