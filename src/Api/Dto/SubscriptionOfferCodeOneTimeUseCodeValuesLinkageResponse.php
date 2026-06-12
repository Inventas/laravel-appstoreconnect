<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionOfferCodeOneTimeUseCodeValuesLinkageResponse
 */
class SubscriptionOfferCodeOneTimeUseCodeValuesLinkageResponse extends SpatieData
{
    public function __construct(
        public SubscriptionOfferCodeOneTimeUseCodeValuesLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
