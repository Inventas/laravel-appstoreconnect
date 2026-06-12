<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceScheduleRelationshipsApp
 */
class AppPriceScheduleRelationshipsApp extends SpatieData
{
    public function __construct(
        public AppPriceScheduleRelationshipsAppData|Optional $data = new Optional,
    ) {}
}
