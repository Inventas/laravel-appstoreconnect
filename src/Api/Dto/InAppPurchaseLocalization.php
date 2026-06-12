<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseLocalization
 */
class InAppPurchaseLocalization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchaseLocalizationAttributes|Optional $attributes = new Optional,
        public InAppPurchaseLocalizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
