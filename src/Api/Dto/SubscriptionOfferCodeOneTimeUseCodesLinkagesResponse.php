<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeOneTimeUseCodesLinkagesResponse
 */
class SubscriptionOfferCodeOneTimeUseCodesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionOfferCodeOneTimeUseCodesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionOfferCodeOneTimeUseCodesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
