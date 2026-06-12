<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodesLinkagesResponse
 */
class SubscriptionOfferCodesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionOfferCodesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionOfferCodesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
