<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionSubscriptionAvailabilityLinkageResponse
 */
class SubscriptionSubscriptionAvailabilityLinkageResponse extends SpatieData
{
    public function __construct(
        public SubscriptionSubscriptionAvailabilityLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
