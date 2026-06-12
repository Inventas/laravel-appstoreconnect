<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAvailabilityV2CreateRequest
 */
class AppAvailabilityV2createRequest extends SpatieData
{
    /**
     * @param  array<int, TerritoryAvailabilityInlineCreate>|Optional  $included
     */
    public function __construct(
        public AppAvailabilityV2createRequestData $data,
        /** @var array<int, TerritoryAvailabilityInlineCreate>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
