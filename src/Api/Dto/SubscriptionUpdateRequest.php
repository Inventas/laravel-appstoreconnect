<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionUpdateRequest
 */
class SubscriptionUpdateRequest extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPromotionalOfferInlineCreate|SubscriptionPriceInlineCreate|SubscriptionIntroductoryOfferInlineCreate>|Optional  $included
     */
    public function __construct(
        public SubscriptionUpdateRequestData $data,
        /** @var array<int, SubscriptionPromotionalOfferInlineCreate|SubscriptionPriceInlineCreate|SubscriptionIntroductoryOfferInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
