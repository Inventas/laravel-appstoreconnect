<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseLocalizationCreateRequestDataRelationshipsInAppPurchaseV2data
 */
class InAppPurchaseLocalizationCreateRequestDataRelationshipsInAppPurchaseV2data extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
