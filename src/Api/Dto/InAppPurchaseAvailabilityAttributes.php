<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseAvailabilityAttributes
 */
class InAppPurchaseAvailabilityAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional $availableInNewTerritories = new Optional,
    ) {}
}
