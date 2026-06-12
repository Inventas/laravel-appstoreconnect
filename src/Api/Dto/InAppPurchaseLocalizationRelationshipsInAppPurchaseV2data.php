<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseLocalizationRelationshipsInAppPurchaseV2data
 */
class InAppPurchaseLocalizationRelationshipsInAppPurchaseV2data extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
