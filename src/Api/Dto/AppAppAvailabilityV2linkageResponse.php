<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppAppAvailabilityV2linkageResponse
 */
class AppAppAvailabilityV2linkageResponse extends SpatieData
{
    public function __construct(
        public AppAppAvailabilityV2linkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
