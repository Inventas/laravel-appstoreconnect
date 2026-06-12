<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeCustomCode
 */
class InAppPurchaseOfferCodeCustomCode extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchaseOfferCodeCustomCodeAttributes|Optional $attributes = new Optional,
        public InAppPurchaseOfferCodeCustomCodeRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
