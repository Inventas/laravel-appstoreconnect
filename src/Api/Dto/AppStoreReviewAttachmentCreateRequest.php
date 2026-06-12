<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreReviewAttachmentCreateRequest
 */
class AppStoreReviewAttachmentCreateRequest extends SpatieData
{
    public function __construct(
        public AppStoreReviewAttachmentCreateRequestData $data,
    ) {}
}
