<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseAppStoreReviewScreenshotCreateRequestData
 */
class InAppPurchaseAppStoreReviewScreenshotCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public InAppPurchaseAppStoreReviewScreenshotCreateRequestDataAttributes $attributes,
        public InAppPurchaseAppStoreReviewScreenshotCreateRequestDataRelationships $relationships,
    ) {}
}
