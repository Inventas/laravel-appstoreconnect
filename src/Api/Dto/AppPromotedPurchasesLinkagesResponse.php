<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPromotedPurchasesLinkagesResponse
 */
class AppPromotedPurchasesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppPromotedPurchasesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppPromotedPurchasesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
