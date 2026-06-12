<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOfferCreateRequest
 */
class SubscriptionIntroductoryOfferCreateRequest extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPricePointInlineCreate>|Optional  $included
     */
    public function __construct(
        public SubscriptionIntroductoryOfferCreateRequestData $data,
        /** @var array<int, SubscriptionPricePointInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
