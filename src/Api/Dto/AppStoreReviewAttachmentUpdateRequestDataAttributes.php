<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewAttachmentUpdateRequestDataAttributes
 */
class AppStoreReviewAttachmentUpdateRequestDataAttributes extends SpatieData
{
    public function __construct(
        public string|Optional|null $sourceFileChecksum = new Optional,
        public bool|Optional|null $uploaded = new Optional,
    ) {}
}
