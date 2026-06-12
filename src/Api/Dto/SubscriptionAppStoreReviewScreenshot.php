<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionAppStoreReviewScreenshot
 */
class SubscriptionAppStoreReviewScreenshot extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public SubscriptionAppStoreReviewScreenshotAttributes|Optional $attributes = new Optional,
        public SubscriptionAppStoreReviewScreenshotRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
