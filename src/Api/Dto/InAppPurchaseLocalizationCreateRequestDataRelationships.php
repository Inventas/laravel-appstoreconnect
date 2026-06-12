<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseLocalizationCreateRequestDataRelationships
 */
class InAppPurchaseLocalizationCreateRequestDataRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseLocalizationCreateRequestDataRelationshipsInAppPurchaseV2 $inAppPurchaseV2,
    ) {}
}
