<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionLocalizationSearchKeywordsLinkagesResponse
 */
class AppStoreVersionLocalizationSearchKeywordsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionLocalizationSearchKeywordsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppStoreVersionLocalizationSearchKeywordsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
