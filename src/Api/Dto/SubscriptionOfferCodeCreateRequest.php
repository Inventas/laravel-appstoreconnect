<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeCreateRequest
 */
class SubscriptionOfferCodeCreateRequest extends SpatieData
{
    /**
     * @param  array<int, SubscriptionOfferCodePriceInlineCreate>|Optional  $included
     */
    public function __construct(
        public SubscriptionOfferCodeCreateRequestData $data,
        /** @var array<int, SubscriptionOfferCodePriceInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
