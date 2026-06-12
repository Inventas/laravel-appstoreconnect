<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPricesLinkagesResponse
 */
class SubscriptionPricesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPricesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionPricesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
