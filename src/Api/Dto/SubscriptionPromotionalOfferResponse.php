<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferResponse
 */
class SubscriptionPromotionalOfferResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPromotionalOfferPrice|Subscription>|Optional  $included
     */
    public function __construct(
        public SubscriptionPromotionalOffer $data,
        public DocumentLinks $links,
        /** @var array<int, SubscriptionPromotionalOfferPrice|Subscription>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
