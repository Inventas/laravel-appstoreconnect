<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WinBackOfferPricesLinkagesResponse
 */
class WinBackOfferPricesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, WinBackOfferPricesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, WinBackOfferPricesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
