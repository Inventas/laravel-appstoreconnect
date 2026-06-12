<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AppStoreReviewAttachmentCreateRequestData
 */
class AppStoreReviewAttachmentCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AppStoreReviewAttachmentCreateRequestDataAttributes $attributes,
        public AppStoreReviewAttachmentCreateRequestDataRelationships $relationships,
    ) {}
}
