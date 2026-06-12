<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionLocalizationsResponse
 */
class SubscriptionLocalizationsResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionLocalization>  $data
     * @param  array<int, Subscription>|Optional  $included
     */
    public function __construct(
        /** @var array<int, SubscriptionLocalization> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, Subscription>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
