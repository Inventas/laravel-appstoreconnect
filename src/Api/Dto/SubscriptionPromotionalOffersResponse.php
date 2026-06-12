<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPromotionalOffersResponse
 */
class SubscriptionPromotionalOffersResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPromotionalOffer>  $data
     * @param  array<int, SubscriptionPromotionalOfferPrice|Subscription>|Optional  $included
     */
    public function __construct(
        /** @var array<int, SubscriptionPromotionalOffer> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, SubscriptionPromotionalOfferPrice|Subscription>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
