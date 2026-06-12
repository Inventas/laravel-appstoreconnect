<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPreviewSetRelationshipsAppPreviews
 */
class AppPreviewSetRelationshipsAppPreviews extends SpatieData
{
    /**
     * @param  array<int, AppPreviewSetRelationshipsAppPreviewsDataItem>|Optional  $data
     */
    public function __construct(
        public RelationshipLinks|Optional $links = new Optional,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, AppPreviewSetRelationshipsAppPreviewsDataItem>|Optional */
        public array|Optional $data = new Optional,
    ) {}
}
