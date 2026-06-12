<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppClipAppStoreReviewDetailUpdateRequest
 */
class AppClipAppStoreReviewDetailUpdateRequest extends SpatieData
{
    public function __construct(
        public AppClipAppStoreReviewDetailUpdateRequestData $data,
    ) {}
}
