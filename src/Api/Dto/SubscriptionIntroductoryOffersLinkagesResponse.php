<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOffersLinkagesResponse
 */
class SubscriptionIntroductoryOffersLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionIntroductoryOffersLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionIntroductoryOffersLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
