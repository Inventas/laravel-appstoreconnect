<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppCustomProductPageAppCustomProductPageVersionsLinkagesResponse
 */
class AppCustomProductPageAppCustomProductPageVersionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppCustomProductPageAppCustomProductPageVersionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppCustomProductPageAppCustomProductPageVersionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
