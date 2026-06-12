<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodePricesResponse
 */
class SubscriptionOfferCodePricesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionOfferCodePrice>  $data
     * @param  array<int, SubscriptionPricePoint|Territory>|Optional  $included
     */
    public function __construct(
        /** @var array<int, SubscriptionOfferCodePrice> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, SubscriptionPricePoint|Territory>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
