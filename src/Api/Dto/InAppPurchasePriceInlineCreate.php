<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceInlineCreate
 */
class InAppPurchasePriceInlineCreate extends SpatieData
{
    public function __construct(
        public string $type,
        public string|Optional $id = new Optional,
        public InAppPurchasePriceInlineCreateAttributes|Optional $attributes = new Optional,
        public InAppPurchasePriceInlineCreateRelationships|Optional $relationships = new Optional,
    ) {}
}
