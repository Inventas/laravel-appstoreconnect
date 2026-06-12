<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseAppStoreReviewScreenshotCreateRequest
 */
class InAppPurchaseAppStoreReviewScreenshotCreateRequest extends SpatieData
{
    public function __construct(
        public InAppPurchaseAppStoreReviewScreenshotCreateRequestData $data,
    ) {}
}
