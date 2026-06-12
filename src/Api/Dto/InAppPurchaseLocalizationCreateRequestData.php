<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * InAppPurchaseLocalizationCreateRequestData
 */
class InAppPurchaseLocalizationCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public InAppPurchaseLocalizationCreateRequestDataAttributes $attributes,
        public InAppPurchaseLocalizationCreateRequestDataRelationships $relationships,
    ) {}
}
