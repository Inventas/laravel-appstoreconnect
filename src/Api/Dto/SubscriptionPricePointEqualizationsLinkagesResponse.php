<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPricePointEqualizationsLinkagesResponse
 */
class SubscriptionPricePointEqualizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPricePointEqualizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionPricePointEqualizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
