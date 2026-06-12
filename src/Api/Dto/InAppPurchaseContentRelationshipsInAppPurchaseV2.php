<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseContentRelationshipsInAppPurchaseV2
 */
class InAppPurchaseContentRelationshipsInAppPurchaseV2 extends SpatieData
{
    public function __construct(
        public InAppPurchaseContentRelationshipsInAppPurchaseV2data|Optional $data = new Optional,
    ) {}
}
