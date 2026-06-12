<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseAppStoreReviewScreenshot
 */
class InAppPurchaseAppStoreReviewScreenshot extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchaseAppStoreReviewScreenshotAttributes|Optional $attributes = new Optional,
        public InAppPurchaseAppStoreReviewScreenshotRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
