<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseAvailability
 */
class InAppPurchaseAvailability extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public InAppPurchaseAvailabilityAttributes|Optional $attributes = new Optional,
        public InAppPurchaseAvailabilityRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
