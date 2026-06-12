<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePricePointEqualizationsLinkagesResponse
 */
class InAppPurchasePricePointEqualizationsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchasePricePointEqualizationsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, InAppPurchasePricePointEqualizationsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
