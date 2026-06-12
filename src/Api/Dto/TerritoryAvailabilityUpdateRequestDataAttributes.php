<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * TerritoryAvailabilityUpdateRequestDataAttributes
 */
class TerritoryAvailabilityUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public bool|Optional|null $available = new Optional,
        public string|Optional|null $releaseDate = new Optional,
        public bool|Optional|null $preOrderEnabled = new Optional,
    ) {}
}
