<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipAppStoreReviewDetailCreateRequest
 */
class AppClipAppStoreReviewDetailCreateRequest extends SpatieData
{
    public function __construct(
        public AppClipAppStoreReviewDetailCreateRequestData $data,
    ) {}
}
