<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewDetailCreateRequestData
 */
class AppStoreReviewDetailCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppStoreReviewDetailCreateRequestDataRelationships $relationships,
        public AppStoreReviewDetailCreateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
