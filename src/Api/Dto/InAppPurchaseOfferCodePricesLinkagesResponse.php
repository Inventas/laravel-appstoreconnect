<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodePricesLinkagesResponse
 */
class InAppPurchaseOfferCodePricesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseOfferCodePricesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, InAppPurchaseOfferCodePricesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
