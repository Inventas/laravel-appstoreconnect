<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2appStoreReviewScreenshotLinkageResponse
 */
class InAppPurchaseV2appStoreReviewScreenshotLinkageResponse extends SpatieData
{
    public function __construct(
        public InAppPurchaseV2appStoreReviewScreenshotLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
