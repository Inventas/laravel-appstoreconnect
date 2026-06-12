<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewDetailUpdateRequestData
 */
class AppStoreReviewDetailUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreReviewDetailUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
