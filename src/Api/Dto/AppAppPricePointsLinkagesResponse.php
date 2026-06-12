<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppAppPricePointsLinkagesResponse
 */
class AppAppPricePointsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppAppPricePointsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppAppPricePointsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
