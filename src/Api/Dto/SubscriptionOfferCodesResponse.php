<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodesResponse
 */
class SubscriptionOfferCodesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionOfferCode>  $data
     * @param  array<int, SubscriptionOfferCodeCustomCode|SubscriptionOfferCodeOneTimeUseCode|SubscriptionOfferCodePrice|Subscription>|Optional  $included
     */
    public function __construct(
        /** @var array<int, SubscriptionOfferCode> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, SubscriptionOfferCodeCustomCode|SubscriptionOfferCodeOneTimeUseCode|SubscriptionOfferCodePrice|Subscription>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
