<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPriceScheduleCreateRequestDataRelationshipsApp
 */
class AppPriceScheduleCreateRequestDataRelationshipsApp extends SpatieData
{
    public function __construct(
        public AppPriceScheduleCreateRequestDataRelationshipsAppData $data,
    ) {}
}
