<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PromotedPurchaseRelationshipsSubscription
 */
class PromotedPurchaseRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public PromotedPurchaseRelationshipsSubscriptionData|Optional $data = new Optional,
    ) {}
}
