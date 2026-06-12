<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionGracePeriodResponse
 */
class SubscriptionGracePeriodResponse extends SpatieData
{
    public function __construct(
        public SubscriptionGracePeriod $data,
        public DocumentLinks $links,
    ) {}
}
