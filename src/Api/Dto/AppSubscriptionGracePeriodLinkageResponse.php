<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppSubscriptionGracePeriodLinkageResponse
 */
class AppSubscriptionGracePeriodLinkageResponse extends SpatieData
{
    public function __construct(
        public AppSubscriptionGracePeriodLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
