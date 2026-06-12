<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionOfferCodeResponse
 */
class SubscriptionOfferCodeResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionOfferCodeCustomCode|SubscriptionOfferCodeOneTimeUseCode|SubscriptionOfferCodePrice|Subscription>|Optional  $included
     */
    public function __construct(
        public SubscriptionOfferCode $data,
        public DocumentLinks $links,
        /** @var array<int, SubscriptionOfferCodeCustomCode|SubscriptionOfferCodeOneTimeUseCode|SubscriptionOfferCodePrice|Subscription>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
