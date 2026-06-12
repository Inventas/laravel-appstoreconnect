<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewRelationships
 */
class CustomerReviewRelationships extends SpatieData
{
    public function __construct(
        public CustomerReviewRelationshipsResponse|Optional $response = new Optional,
        public CustomerReviewRelationshipsReviewTerritory|Optional $reviewTerritory = new Optional,
    ) {}
}
