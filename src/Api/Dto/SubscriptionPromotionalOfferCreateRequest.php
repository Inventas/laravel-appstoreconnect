<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferCreateRequest
 */
class SubscriptionPromotionalOfferCreateRequest extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPromotionalOfferPriceInlineCreate>|Optional  $included
     */
    public function __construct(
        public SubscriptionPromotionalOfferCreateRequestData $data,
        /** @var array<int, SubscriptionPromotionalOfferPriceInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
