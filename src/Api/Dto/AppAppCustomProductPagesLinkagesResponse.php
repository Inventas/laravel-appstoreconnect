<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAppCustomProductPagesLinkagesResponse
 */
class AppAppCustomProductPagesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppAppCustomProductPagesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppAppCustomProductPagesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
