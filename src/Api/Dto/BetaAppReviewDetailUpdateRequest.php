<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * BetaAppReviewDetailUpdateRequest
 */
class BetaAppReviewDetailUpdateRequest extends SpatieData
{
    public function __construct(
        public BetaAppReviewDetailUpdateRequestData $data,
    ) {}
}
