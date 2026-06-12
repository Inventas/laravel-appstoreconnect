<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseAppStoreReviewScreenshotRelationships
 */
class InAppPurchaseAppStoreReviewScreenshotRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseAppStoreReviewScreenshotRelationshipsInAppPurchaseV2|Optional $inAppPurchaseV2 = new Optional,
    ) {}
}
