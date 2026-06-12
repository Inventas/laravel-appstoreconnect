<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppAvailabilityV2createRequestDataRelationshipsApp
 */
class AppAvailabilityV2createRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public AppAvailabilityV2createRequestDataRelationshipsAppData $data,
    ) {}
}
