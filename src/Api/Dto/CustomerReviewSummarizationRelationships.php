<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewSummarizationRelationships
 */
class CustomerReviewSummarizationRelationships extends SpatieData
{
    public function __construct(
        public CustomerReviewSummarizationRelationshipsTerritory|Optional $territory = new Optional,
    ) {}
}
