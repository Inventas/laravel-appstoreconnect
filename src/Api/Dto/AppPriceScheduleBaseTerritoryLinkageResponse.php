<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppPriceScheduleBaseTerritoryLinkageResponse
 */
class AppPriceScheduleBaseTerritoryLinkageResponse extends SpatieData
{
    public function __construct(
        public AppPriceScheduleBaseTerritoryLinkageResponseData $data,
        public DocumentLinks $links,
    ) {}
}
