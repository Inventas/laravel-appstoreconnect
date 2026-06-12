<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionPriceInlineCreateRelationshipsSubscriptionPricePoint
 */
class SubscriptionPriceInlineCreateRelationshipsSubscriptionPricePoint extends SpatieData
{
    public function __construct(
        public SubscriptionPriceInlineCreateRelationshipsSubscriptionPricePointData|Optional $data = new Optional,
    ) {}
}
