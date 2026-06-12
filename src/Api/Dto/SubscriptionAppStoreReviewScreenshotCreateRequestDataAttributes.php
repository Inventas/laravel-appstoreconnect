<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionAppStoreReviewScreenshotCreateRequestDataAttributes
 */
class SubscriptionAppStoreReviewScreenshotCreateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public int $fileSize,
        public string $fileName,
    ) {}
}
