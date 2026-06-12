<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppAvailabilityV2createRequestDataAttributes
 */
class AppAvailabilityV2createRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool $availableInNewTerritories,
    ) {}
}
