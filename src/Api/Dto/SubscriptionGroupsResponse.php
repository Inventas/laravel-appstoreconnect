<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupsResponse
 */
class SubscriptionGroupsResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionGroup>  $data
     * @param  array<int, SubscriptionGroupLocalization|Subscription>|Optional  $included
     */
    public function __construct(
        /** @var array<int, SubscriptionGroup> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, SubscriptionGroupLocalization|Subscription>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
