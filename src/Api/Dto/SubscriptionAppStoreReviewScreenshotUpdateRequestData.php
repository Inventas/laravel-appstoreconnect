<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionAppStoreReviewScreenshotUpdateRequestData
 */
class SubscriptionAppStoreReviewScreenshotUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionAppStoreReviewScreenshotUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
