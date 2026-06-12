<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppReviewDetail
 */
class BetaAppReviewDetail extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaAppReviewDetailAttributes|Optional $attributes = new Optional,
        public BetaAppReviewDetailRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
