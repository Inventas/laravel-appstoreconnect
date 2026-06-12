<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceScheduleRelationshipsBaseTerritory
 */
class InAppPurchasePriceScheduleRelationshipsBaseTerritory extends SpatieData
{
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public InAppPurchasePriceScheduleRelationshipsBaseTerritoryData|Optional $data = new Optional,
    ) {}
}
