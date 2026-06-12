<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewSummarization
 */
class CustomerReviewSummarization extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public CustomerReviewSummarizationAttributes|Optional $attributes = new Optional,
        public CustomerReviewSummarizationRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
