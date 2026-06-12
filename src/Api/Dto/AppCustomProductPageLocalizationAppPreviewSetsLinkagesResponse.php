<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageLocalizationAppPreviewSetsLinkagesResponse
 */
class AppCustomProductPageLocalizationAppPreviewSetsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageLocalizationAppPreviewSetsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppCustomProductPageLocalizationAppPreviewSetsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
