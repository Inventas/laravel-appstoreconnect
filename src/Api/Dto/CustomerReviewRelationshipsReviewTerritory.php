<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewRelationshipsReviewTerritory
 */
class CustomerReviewRelationshipsReviewTerritory extends SpatieData
{
    public function __construct(
        public CustomerReviewRelationshipsReviewTerritoryData|Optional $data = new Optional,
    ) {}
}
