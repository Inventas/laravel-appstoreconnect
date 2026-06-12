<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseLocalizationCreateRequestDataRelationshipsInAppPurchaseV2
 */
class InAppPurchaseLocalizationCreateRequestDataRelationshipsInAppPurchaseV2 extends SpatieData
{
    public function __construct(
        public InAppPurchaseLocalizationCreateRequestDataRelationshipsInAppPurchaseV2data $data,
    ) {}
}
