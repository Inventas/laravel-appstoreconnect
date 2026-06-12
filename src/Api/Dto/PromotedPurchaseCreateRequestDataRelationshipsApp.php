<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * PromotedPurchaseCreateRequestDataRelationshipsApp
 */
class PromotedPurchaseCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public PromotedPurchaseCreateRequestDataRelationshipsAppData $data,
    ) {}
}
