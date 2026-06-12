<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseContentRelationshipsInAppPurchaseV2data
 */
class InAppPurchaseContentRelationshipsInAppPurchaseV2data extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
