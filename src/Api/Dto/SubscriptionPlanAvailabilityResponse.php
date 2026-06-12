<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPlanAvailabilityResponse
 */
class SubscriptionPlanAvailabilityResponse extends SpatieData
{
    /**
     * @param  array<int, Territory>|Optional  $included
     */
    public function __construct(
        public SubscriptionPlanAvailability $data,
        public DocumentLinks $links,
        /** @var array<int, Territory>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
