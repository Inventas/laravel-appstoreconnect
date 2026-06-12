<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PromotedPurchaseRelationships
 */
class PromotedPurchaseRelationships extends SpatieData
{
    public function __construct(
        public PromotedPurchaseRelationshipsInAppPurchaseV2|Optional $inAppPurchaseV2 = new Optional,
        public PromotedPurchaseRelationshipsSubscription|Optional $subscription = new Optional,
    ) {}
}
