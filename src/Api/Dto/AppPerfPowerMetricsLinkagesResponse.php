<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppPerfPowerMetricsLinkagesResponse
 */
class AppPerfPowerMetricsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AppPerfPowerMetricsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AppPerfPowerMetricsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
