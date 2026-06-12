<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseLocalizationRelationships
 */
class InAppPurchaseLocalizationRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseLocalizationRelationshipsInAppPurchaseV2|Optional $inAppPurchaseV2 = new Optional,
    ) {}
}
