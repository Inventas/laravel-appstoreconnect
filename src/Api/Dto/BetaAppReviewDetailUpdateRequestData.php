<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaAppReviewDetailUpdateRequestData
 */
class BetaAppReviewDetailUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public BetaAppReviewDetailUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
