<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionAvailabilityResponse
 */
class SubscriptionAvailabilityResponse extends SpatieData
{
    /**
     * @param  array<int, Territory>|Optional  $included
     */
    public function __construct(
        public SubscriptionAvailability $data,
        public DocumentLinks $links,
        /** @var array<int, Territory>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
