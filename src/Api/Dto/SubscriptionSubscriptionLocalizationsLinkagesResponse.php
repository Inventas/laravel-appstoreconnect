<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionSubscriptionLocalizationsLinkagesResponse
 */
class SubscriptionSubscriptionLocalizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionSubscriptionLocalizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionSubscriptionLocalizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
