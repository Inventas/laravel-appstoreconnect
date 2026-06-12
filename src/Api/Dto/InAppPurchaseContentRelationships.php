<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseContentRelationships
 */
class InAppPurchaseContentRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseContentRelationshipsInAppPurchaseV2|Optional $inAppPurchaseV2 = new Optional,
    ) {}
}
