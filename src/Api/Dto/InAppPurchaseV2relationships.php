<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2relationships
 */
class InAppPurchaseV2relationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseV2relationshipsInAppPurchaseLocalizations|Optional $inAppPurchaseLocalizations = new Optional,
        public InAppPurchaseV2relationshipsPricePoints|Optional $pricePoints = new Optional,
        public InAppPurchaseV2relationshipsContent|Optional $content = new Optional,
        public InAppPurchaseV2relationshipsAppStoreReviewScreenshot|Optional $appStoreReviewScreenshot = new Optional,
        public InAppPurchaseV2relationshipsPromotedPurchase|Optional $promotedPurchase = new Optional,
        public InAppPurchaseV2relationshipsIapPriceSchedule|Optional $iapPriceSchedule = new Optional,
        public InAppPurchaseV2relationshipsInAppPurchaseAvailability|Optional $inAppPurchaseAvailability = new Optional,
        public InAppPurchaseV2relationshipsImages|Optional $images = new Optional,
        public InAppPurchaseV2relationshipsOfferCodes|Optional $offerCodes = new Optional,
    ) {}
}
