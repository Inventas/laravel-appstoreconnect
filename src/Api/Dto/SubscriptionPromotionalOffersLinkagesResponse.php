<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOffersLinkagesResponse
 */
class SubscriptionPromotionalOffersLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPromotionalOffersLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionPromotionalOffersLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
