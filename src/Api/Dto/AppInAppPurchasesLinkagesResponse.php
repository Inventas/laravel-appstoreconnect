<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInAppPurchasesLinkagesResponse
 */
class AppInAppPurchasesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppInAppPurchasesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppInAppPurchasesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
