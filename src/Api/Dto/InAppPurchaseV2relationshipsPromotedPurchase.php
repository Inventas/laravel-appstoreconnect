<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2relationshipsPromotedPurchase
 */
class InAppPurchaseV2relationshipsPromotedPurchase extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public InAppPurchaseV2relationshipsPromotedPurchaseData|Optional $data = new Optional,
    ) {}
}
