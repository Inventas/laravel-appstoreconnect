<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferResponse
 */
class SubscriptionIntroductoryOfferResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPricePoint|Subscription|Territory>|Optional  $included
     */
    public function __construct(
        public SubscriptionIntroductoryOffer $data,
        public DocumentLinks $links,
        /** @var array<int, SubscriptionPricePoint|Subscription|Territory>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
