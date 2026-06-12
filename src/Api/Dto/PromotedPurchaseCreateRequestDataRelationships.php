<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * PromotedPurchaseCreateRequestDataRelationships
 */
class PromotedPurchaseCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public PromotedPurchaseCreateRequestDataRelationshipsApp $app,
        public PromotedPurchaseCreateRequestDataRelationshipsInAppPurchaseV2|Optional $inAppPurchaseV2 = new Optional,
        public PromotedPurchaseCreateRequestDataRelationshipsSubscription|Optional $subscription = new Optional,
    ) {}
}
