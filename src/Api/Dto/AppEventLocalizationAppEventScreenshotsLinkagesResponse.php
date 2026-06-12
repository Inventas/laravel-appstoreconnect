<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventLocalizationAppEventScreenshotsLinkagesResponse
 */
class AppEventLocalizationAppEventScreenshotsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppEventLocalizationAppEventScreenshotsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppEventLocalizationAppEventScreenshotsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
