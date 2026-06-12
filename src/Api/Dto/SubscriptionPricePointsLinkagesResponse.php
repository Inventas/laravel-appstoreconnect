<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPricePointsLinkagesResponse
 */
class SubscriptionPricePointsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPricePointsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionPricePointsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
