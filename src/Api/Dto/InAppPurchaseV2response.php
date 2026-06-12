<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2Response
 */
class InAppPurchaseV2response extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseAppStoreReviewScreenshot|InAppPurchaseAvailability|InAppPurchaseContent|InAppPurchaseImage|InAppPurchaseLocalization|InAppPurchaseOfferCode|InAppPurchasePricePoint|InAppPurchasePriceSchedule|PromotedPurchase>|Optional  $included
     */
    public function __construct(
        public InAppPurchaseV2 $data,
        public DocumentLinks $links,
        /** @var array<int, InAppPurchaseAppStoreReviewScreenshot|InAppPurchaseAvailability|InAppPurchaseContent|InAppPurchaseImage|InAppPurchaseLocalization|InAppPurchaseOfferCode|InAppPurchasePricePoint|InAppPurchasePriceSchedule|PromotedPurchase>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
