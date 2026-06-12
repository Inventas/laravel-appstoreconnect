<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreReviewDetailRelationshipsAppStoreReviewAttachments
 */
class AppStoreReviewDetailRelationshipsAppStoreReviewAttachments extends SpatieData
{
    /**
     * @param  array<int, AppStoreReviewDetailRelationshipsAppStoreReviewAttachmentsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppStoreReviewDetailRelationshipsAppStoreReviewAttachmentsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
