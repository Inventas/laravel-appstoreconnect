<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageLocalizationAppScreenshotSetsLinkagesResponse
 */
class AppCustomProductPageLocalizationAppScreenshotSetsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageLocalizationAppScreenshotSetsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppCustomProductPageLocalizationAppScreenshotSetsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
