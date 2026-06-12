<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeOneTimeUseCodesResponse
 */
class SubscriptionOfferCodeOneTimeUseCodesResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionOfferCodeOneTimeUseCode>  $data
     * @param  array<int, SubscriptionOfferCode>|Optional  $included
     */
    public function __construct(
        /** @var array<int, SubscriptionOfferCodeOneTimeUseCode> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, SubscriptionOfferCode>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
