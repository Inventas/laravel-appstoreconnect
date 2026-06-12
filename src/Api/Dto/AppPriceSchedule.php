<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceSchedule
 */
class AppPriceSchedule extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppPriceScheduleRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
