<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAvailabilityV2Response
 */
class AppAvailabilityV2response extends SpatieData
{
    /**
     * @param  array<int, TerritoryAvailability>|Optional  $included
     */
    public function __construct(
        public AppAvailabilityV2 $data,
        public DocumentLinks $links,
        /** @var array<int, TerritoryAvailability>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
