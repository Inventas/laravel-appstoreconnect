<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppInAppPurchasesV2linkagesResponse
 */
class AppInAppPurchasesV2linkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppInAppPurchasesV2linkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppInAppPurchasesV2linkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
