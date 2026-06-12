<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseV2imagesLinkagesResponse
 */
class InAppPurchaseV2imagesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseV2imagesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, InAppPurchaseV2imagesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
