<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewAttachmentResponse
 */
class AppStoreReviewAttachmentResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreReviewDetail>|Optional  $included
     */
    public function __construct(
        public AppStoreReviewAttachment $data,
        public DocumentLinks $links,
        /** @var array<int, AppStoreReviewDetail>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
