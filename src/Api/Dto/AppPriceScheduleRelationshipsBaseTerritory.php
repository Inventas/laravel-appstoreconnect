<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceScheduleRelationshipsBaseTerritory
 */
class AppPriceScheduleRelationshipsBaseTerritory extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public AppPriceScheduleRelationshipsBaseTerritoryData|Optional $data = new Optional,
    ) {}
}
