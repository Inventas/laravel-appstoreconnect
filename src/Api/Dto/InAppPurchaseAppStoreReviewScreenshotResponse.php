<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseAppStoreReviewScreenshotResponse
 */
class InAppPurchaseAppStoreReviewScreenshotResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseV2>|Optional  $included
     */
    public function __construct(
        public InAppPurchaseAppStoreReviewScreenshot $data,
        public DocumentLinks $links,
        /** @var array<int, InAppPurchaseV2>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
