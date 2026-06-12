<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewDetail
 */
class AppStoreReviewDetail extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreReviewDetailAttributes|Optional $attributes = new Optional,
        public AppStoreReviewDetailRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
