<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewAttachmentUpdateRequestData
 */
class AppStoreReviewAttachmentUpdateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreReviewAttachmentUpdateRequestDataAttributes|Optional $attributes = new Optional,
    ) {}
}
