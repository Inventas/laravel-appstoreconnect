<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceScheduleManualPricesLinkagesResponse
 */
class AppPriceScheduleManualPricesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppPriceScheduleManualPricesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppPriceScheduleManualPricesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
