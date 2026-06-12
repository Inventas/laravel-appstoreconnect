<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageLocalizationSearchKeywordsLinkagesResponse
 */
class AppCustomProductPageLocalizationSearchKeywordsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageLocalizationSearchKeywordsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppCustomProductPageLocalizationSearchKeywordsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
