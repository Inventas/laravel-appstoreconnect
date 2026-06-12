<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2offerCodesLinkagesResponse
 */
class InAppPurchaseV2offerCodesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseV2offerCodesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, InAppPurchaseV2offerCodesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
