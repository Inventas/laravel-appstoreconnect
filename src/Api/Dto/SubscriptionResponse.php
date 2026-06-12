<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionResponse
 */
class SubscriptionResponse extends SpatieData
{
    /**
     * @param  array<int, PromotedPurchase|SubscriptionAppStoreReviewScreenshot|SubscriptionAvailability|SubscriptionGroup|SubscriptionImage|SubscriptionIntroductoryOffer|SubscriptionLocalization|SubscriptionOfferCode|SubscriptionPlanAvailability|SubscriptionPrice|SubscriptionPromotionalOffer|WinBackOffer>|Optional  $included
     */
    public function __construct(
        public Subscription $data,
        public DocumentLinks $links,
        /** @var array<int, PromotedPurchase|SubscriptionAppStoreReviewScreenshot|SubscriptionAvailability|SubscriptionGroup|SubscriptionImage|SubscriptionIntroductoryOffer|SubscriptionLocalization|SubscriptionOfferCode|SubscriptionPlanAvailability|SubscriptionPrice|SubscriptionPromotionalOffer|WinBackOffer>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
