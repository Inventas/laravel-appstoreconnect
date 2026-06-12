<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasesV2Response
 */
class InAppPurchasesV2response extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseV2>  $data
     * @param  array<int, InAppPurchaseAppStoreReviewScreenshot|InAppPurchaseAvailability|InAppPurchaseContent|InAppPurchaseImage|InAppPurchaseLocalization|InAppPurchaseOfferCode|InAppPurchasePricePoint|InAppPurchasePriceSchedule|PromotedPurchase>|Optional  $included
     */
    public function __construct(
        /** @var array<int, InAppPurchaseV2> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, InAppPurchaseAppStoreReviewScreenshot|InAppPurchaseAvailability|InAppPurchaseContent|InAppPurchaseImage|InAppPurchaseLocalization|InAppPurchaseOfferCode|InAppPurchasePricePoint|InAppPurchasePriceSchedule|PromotedPurchase>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
