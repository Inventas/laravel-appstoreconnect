<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionsResponse
 */
class SubscriptionsResponse extends SpatieData
{
    /**
     * @param  array<int, Subscription>  $data
     * @param  array<int, PromotedPurchase|SubscriptionAppStoreReviewScreenshot|SubscriptionAvailability|SubscriptionGroup|SubscriptionImage|SubscriptionIntroductoryOffer|SubscriptionLocalization|SubscriptionOfferCode|SubscriptionPlanAvailability|SubscriptionPrice|SubscriptionPromotionalOffer|WinBackOffer>|Optional  $included
     */
    public function __construct(
        /** @var array<int, Subscription> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, PromotedPurchase|SubscriptionAppStoreReviewScreenshot|SubscriptionAvailability|SubscriptionGroup|SubscriptionImage|SubscriptionIntroductoryOffer|SubscriptionLocalization|SubscriptionOfferCode|SubscriptionPlanAvailability|SubscriptionPrice|SubscriptionPromotionalOffer|WinBackOffer>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
