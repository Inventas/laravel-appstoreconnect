<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupSubscriptionGroupLocalizationsLinkagesResponse
 */
class SubscriptionGroupSubscriptionGroupLocalizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionGroupSubscriptionGroupLocalizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionGroupSubscriptionGroupLocalizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
