<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPriceScheduleCreateRequestData
 */
class AppPriceScheduleCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppPriceScheduleCreateRequestDataRelationships $relationships,
    ) {}
}
