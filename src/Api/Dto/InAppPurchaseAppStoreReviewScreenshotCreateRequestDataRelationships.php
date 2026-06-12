<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseAppStoreReviewScreenshotCreateRequestDataRelationships
 */
class InAppPurchaseAppStoreReviewScreenshotCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseAppStoreReviewScreenshotCreateRequestDataRelationshipsInAppPurchaseV2 $inAppPurchaseV2,
    ) {}
}
