<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseV2createRequestData
 */
class InAppPurchaseV2createRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public InAppPurchaseV2createRequestDataAttributes $attributes,
        public InAppPurchaseV2createRequestDataRelationships $relationships,
    ) {}
}
