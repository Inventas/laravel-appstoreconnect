<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchaseOfferCodeCustomCodesLinkagesResponse
 */
class InAppPurchaseOfferCodeCustomCodesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchaseOfferCodeCustomCodesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, InAppPurchaseOfferCodeCustomCodesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
