<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseAvailabilityRelationships
 */
class InAppPurchaseAvailabilityRelationships extends SpatieData
{
    public function __construct(
        public InAppPurchaseAvailabilityRelationshipsAvailableTerritories|Optional $availableTerritories = new Optional,
    ) {}
}
