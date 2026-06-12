<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2relationshipsAppStoreReviewScreenshot
 */
class InAppPurchaseV2relationshipsAppStoreReviewScreenshot extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public InAppPurchaseV2relationshipsAppStoreReviewScreenshotData|Optional $data = new Optional,
    ) {}
}
