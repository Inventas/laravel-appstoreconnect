<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOfferPricesResponse
 */
class SubscriptionPromotionalOfferPricesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPromotionalOfferPrice>  $data
     * @param  array<int, SubscriptionPricePoint|Territory>|Optional  $included
     */
    public function __construct(
        /** @var array<int, SubscriptionPromotionalOfferPrice> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, SubscriptionPricePoint|Territory>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
