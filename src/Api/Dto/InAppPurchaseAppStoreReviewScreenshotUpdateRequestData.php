<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseAppStoreReviewScreenshotUpdateRequestData
 */
class InAppPurchaseAppStoreReviewScreenshotUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchaseAppStoreReviewScreenshotUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
