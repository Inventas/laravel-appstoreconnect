<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionRelationships
 */
class SubscriptionRelationships extends SpatieData
{
    public function __construct(
        public SubscriptionRelationshipsSubscriptionLocalizations|Optional $subscriptionLocalizations = new Optional,
        public SubscriptionRelationshipsAppStoreReviewScreenshot|Optional $appStoreReviewScreenshot = new Optional,
        public SubscriptionRelationshipsGroup|Optional $group = new Optional,
        public SubscriptionRelationshipsIntroductoryOffers|Optional $introductoryOffers = new Optional,
        public SubscriptionRelationshipsPromotionalOffers|Optional $promotionalOffers = new Optional,
        public SubscriptionRelationshipsOfferCodes|Optional $offerCodes = new Optional,
        public SubscriptionRelationshipsPrices|Optional $prices = new Optional,
        public SubscriptionRelationshipsPricePoints|Optional $pricePoints = new Optional,
        public SubscriptionRelationshipsPromotedPurchase|Optional $promotedPurchase = new Optional,
        public SubscriptionRelationshipsSubscriptionAvailability|Optional $subscriptionAvailability = new Optional,
        public SubscriptionRelationshipsWinBackOffers|Optional $winBackOffers = new Optional,
        public SubscriptionRelationshipsImages|Optional $images = new Optional,
        public SubscriptionRelationshipsPlanAvailabilities|Optional $planAvailabilities = new Optional,
    ) {}
}
