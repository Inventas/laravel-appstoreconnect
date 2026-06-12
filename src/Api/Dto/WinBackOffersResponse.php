<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * WinBackOffersResponse
 */
class WinBackOffersResponse extends SpatieData
{
    /**
     * @param  array<int, WinBackOffer>  $data
     * @param  array<int, WinBackOfferPrice>|Optional  $included
     */
    public function __construct(
        /** @var array<int, WinBackOffer> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, WinBackOfferPrice>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
