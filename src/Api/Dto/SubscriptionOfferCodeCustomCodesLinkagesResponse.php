<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeCustomCodesLinkagesResponse
 */
class SubscriptionOfferCodeCustomCodesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionOfferCodeCustomCodesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionOfferCodeCustomCodesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
