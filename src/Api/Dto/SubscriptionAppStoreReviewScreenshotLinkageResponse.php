<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionAppStoreReviewScreenshotLinkageResponse
 */
class SubscriptionAppStoreReviewScreenshotLinkageResponse extends SpatieData
{
    public function __construct(
        public SubscriptionAppStoreReviewScreenshotLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
