<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPricesResponse
 */
class SubscriptionPricesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPrice>  $data
     * @param  array<int, SubscriptionPricePoint|Territory>|Optional  $included
     */
    public function __construct(
        /** @var array<int, SubscriptionPrice> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, SubscriptionPricePoint|Territory>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
