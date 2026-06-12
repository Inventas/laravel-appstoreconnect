<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseImageCreateRequestData
 */
class InAppPurchaseImageCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public InAppPurchaseImageCreateRequestDataAttributes $attributes,
        public InAppPurchaseImageCreateRequestDataRelationships $relationships,
    ) {}
}
