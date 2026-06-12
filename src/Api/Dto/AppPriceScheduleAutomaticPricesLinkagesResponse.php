<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPriceScheduleAutomaticPricesLinkagesResponse
 */
class AppPriceScheduleAutomaticPricesLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppPriceScheduleAutomaticPricesLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppPriceScheduleAutomaticPricesLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
