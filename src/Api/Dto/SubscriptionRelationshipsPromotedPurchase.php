<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * SubscriptionRelationshipsPromotedPurchase
 */
class SubscriptionRelationshipsPromotedPurchase extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public SubscriptionRelationshipsPromotedPurchaseData|Optional $data = new Optional,
    ) {}
}
