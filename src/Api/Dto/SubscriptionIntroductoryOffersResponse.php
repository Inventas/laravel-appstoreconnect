<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionIntroductoryOffersResponse
 */
class SubscriptionIntroductoryOffersResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionIntroductoryOffer>  $data
     * @param  array<int, SubscriptionPricePoint|Subscription|Territory>|Optional  $included
     */
    public function __construct(
        /** @var array<int, SubscriptionIntroductoryOffer> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, SubscriptionPricePoint|Subscription|Territory>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
