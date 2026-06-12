<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupLocalizationsResponse
 */
class SubscriptionGroupLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionGroupLocalization>  $data
     * @param  array<int, SubscriptionGroup>|Optional  $included
     */
    public function __construct(
        /** @var array<int, SubscriptionGroupLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, SubscriptionGroup>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
