<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeOneTimeUseCodeResponse
 */
class SubscriptionOfferCodeOneTimeUseCodeResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionOfferCode>|Optional  $included
     */
    public function __construct(
        public SubscriptionOfferCodeOneTimeUseCode $data,
        public DocumentLinks $links,
        /** @var array<int, SubscriptionOfferCode>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
