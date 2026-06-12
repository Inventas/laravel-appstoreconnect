<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReview
 */
class CustomerReview extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public CustomerReviewAttributes|Optional $attributes = new Optional,
        public CustomerReviewRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
