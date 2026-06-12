<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionGroupResponse
 */
class SubscriptionGroupResponse extends SpatieData
{
    /**
     * @param  array<int, SubscriptionGroupLocalization|Subscription>|Optional  $included
     */
    public function __construct(
        public SubscriptionGroup $data,
        public DocumentLinks $links,
        /** @var array<int, SubscriptionGroupLocalization|Subscription>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
