<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceScheduleAutomaticPricesLinkagesResponse
 */
class InAppPurchasePriceScheduleAutomaticPricesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchasePriceScheduleAutomaticPricesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, InAppPurchasePriceScheduleAutomaticPricesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
