<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPlanAvailabilityAvailableTerritoriesLinkagesRequest
 */
class SubscriptionPlanAvailabilityAvailableTerritoriesLinkagesRequest extends SpatieData
{
    /**
     * @param  array<int, SubscriptionPlanAvailabilityAvailableTerritoriesLinkagesRequestDataItem>  $data
     */
    public function __construct(
        /** @var array<int, SubscriptionPlanAvailabilityAvailableTerritoriesLinkagesRequestDataItem> */
        public array $data,
    ) {}
}
