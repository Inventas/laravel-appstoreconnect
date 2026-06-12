<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PromotedPurchaseCreateRequestDataRelationshipsSubscription
 */
class PromotedPurchaseCreateRequestDataRelationshipsSubscription extends SpatieData
{
    public function __construct(
        public PromotedPurchaseCreateRequestDataRelationshipsSubscriptionData|Optional $data = new Optional,
    ) {}
}
