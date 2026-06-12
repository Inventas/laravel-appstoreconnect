<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppStoreVersionLocalizationAppScreenshotSetsLinkagesResponse
 */
class AppStoreVersionLocalizationAppScreenshotSetsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppStoreVersionLocalizationAppScreenshotSetsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppStoreVersionLocalizationAppScreenshotSetsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
