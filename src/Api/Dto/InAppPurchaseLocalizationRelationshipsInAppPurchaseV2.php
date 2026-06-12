<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseLocalizationRelationshipsInAppPurchaseV2
 */
class InAppPurchaseLocalizationRelationshipsInAppPurchaseV2 extends SpatieData
{
    public function __construct(
        public InAppPurchaseLocalizationRelationshipsInAppPurchaseV2data|Optional $data = new Optional,
    ) {}
}
