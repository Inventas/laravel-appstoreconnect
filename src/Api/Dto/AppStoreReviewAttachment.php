<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewAttachment
 */
class AppStoreReviewAttachment extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AppStoreReviewAttachmentAttributes|Optional $attributes = new Optional,
        public AppStoreReviewAttachmentRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
