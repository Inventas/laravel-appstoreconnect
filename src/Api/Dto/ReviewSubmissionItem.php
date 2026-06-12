<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * ReviewSubmissionItem
 */
class ReviewSubmissionItem extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public ReviewSubmissionItemAttributes|Optional $attributes = new Optional,
        public ReviewSubmissionItemRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
