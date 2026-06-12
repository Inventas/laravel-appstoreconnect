<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreReviewDetailCreateRequest
 */
class AppStoreReviewDetailCreateRequest extends SpatieData
{
    public function __construct(
        public AppStoreReviewDetailCreateRequestData $data,
    ) {}
}
