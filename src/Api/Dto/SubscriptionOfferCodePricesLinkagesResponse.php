<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodePricesLinkagesResponse
 */
class SubscriptionOfferCodePricesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionOfferCodePricesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionOfferCodePricesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
