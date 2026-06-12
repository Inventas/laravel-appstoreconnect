<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreReviewAttachmentUpdateRequest
 */
class AppStoreReviewAttachmentUpdateRequest extends SpatieData
{
    public function __construct(
        public AppStoreReviewAttachmentUpdateRequestData $data,
    ) {}
}
