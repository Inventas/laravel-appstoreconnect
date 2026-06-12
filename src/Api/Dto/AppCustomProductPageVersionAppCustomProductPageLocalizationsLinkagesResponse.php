<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageVersionAppCustomProductPageLocalizationsLinkagesResponse
 */
class AppCustomProductPageVersionAppCustomProductPageLocalizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageVersionAppCustomProductPageLocalizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppCustomProductPageVersionAppCustomProductPageLocalizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
