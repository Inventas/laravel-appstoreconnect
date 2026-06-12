<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppEventLocalizationAppEventVideoClipsLinkagesResponse
 */
class AppEventLocalizationAppEventVideoClipsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppEventLocalizationAppEventVideoClipsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppEventLocalizationAppEventVideoClipsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
