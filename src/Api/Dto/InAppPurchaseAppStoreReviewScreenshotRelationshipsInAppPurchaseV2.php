<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseAppStoreReviewScreenshotRelationshipsInAppPurchaseV2
 */
class InAppPurchaseAppStoreReviewScreenshotRelationshipsInAppPurchaseV2 extends SpatieData
{
    public function __construct(
        public InAppPurchaseAppStoreReviewScreenshotRelationshipsInAppPurchaseV2data|Optional $data = new Optional,
    ) {}
}
