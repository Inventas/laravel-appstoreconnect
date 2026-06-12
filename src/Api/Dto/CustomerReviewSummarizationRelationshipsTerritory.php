<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewSummarizationRelationshipsTerritory
 */
class CustomerReviewSummarizationRelationshipsTerritory extends SpatieData
{
    public function __construct(
        public CustomerReviewSummarizationRelationshipsTerritoryData|Optional $data = new Optional,
    ) {}
}
