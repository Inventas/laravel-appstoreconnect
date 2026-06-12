<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * InAppPurchasePriceScheduleManualPricesLinkagesResponse
 */
class InAppPurchasePriceScheduleManualPricesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, InAppPurchasePriceScheduleManualPricesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, InAppPurchasePriceScheduleManualPricesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
