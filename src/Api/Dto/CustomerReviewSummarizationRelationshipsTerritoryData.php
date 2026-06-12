<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * CustomerReviewSummarizationRelationshipsTerritoryData
 */
class CustomerReviewSummarizationRelationshipsTerritoryData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
    ) {}
}
