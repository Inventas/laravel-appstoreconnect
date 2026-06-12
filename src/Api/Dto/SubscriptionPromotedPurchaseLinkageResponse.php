<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * SubscriptionPromotedPurchaseLinkageResponse
 */
class SubscriptionPromotedPurchaseLinkageResponse extends SpatieData
{
    public function __construct(
        public SubscriptionPromotedPurchaseLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
