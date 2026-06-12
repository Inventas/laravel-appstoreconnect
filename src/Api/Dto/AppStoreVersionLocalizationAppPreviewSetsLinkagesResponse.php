<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionLocalizationAppPreviewSetsLinkagesResponse
 */
class AppStoreVersionLocalizationAppPreviewSetsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionLocalizationAppPreviewSetsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppStoreVersionLocalizationAppPreviewSetsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
