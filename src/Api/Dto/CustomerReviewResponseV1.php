<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * CustomerReviewResponseV1
 */
class CustomerReviewResponseV1 extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public CustomerReviewResponseV1attributes|Optional $attributes = new Optional,
        public CustomerReviewResponseV1relationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
