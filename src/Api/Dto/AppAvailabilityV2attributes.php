<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAvailabilityV2attributes
 */
class AppAvailabilityV2attributes extends SpatieData
{
    public function __construct(
        public bool|Optional $availableInNewTerritories = new Optional,
    ) {}
}
