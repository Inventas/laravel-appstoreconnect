<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPricePointV3equalizationsLinkagesResponse
 */
class AppPricePointV3equalizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppPricePointV3equalizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppPricePointV3equalizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
