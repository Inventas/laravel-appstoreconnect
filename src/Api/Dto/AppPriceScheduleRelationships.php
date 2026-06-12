<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceScheduleRelationships
 */
class AppPriceScheduleRelationships extends SpatieData
{
    public function __construct(
        public AppPriceScheduleRelationshipsApp|Optional $app = new Optional,
        public AppPriceScheduleRelationshipsBaseTerritory|Optional $baseTerritory = new Optional,
        public AppPriceScheduleRelationshipsManualPrices|Optional $manualPrices = new Optional,
        public AppPriceScheduleRelationshipsAutomaticPrices|Optional $automaticPrices = new Optional,
    ) {}
}
