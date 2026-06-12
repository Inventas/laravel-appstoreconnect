<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReportsResponse
 */
class AnalyticsReportsResponse extends SpatieData
{
    /**
     * @param  array<int, AnalyticsReport>  $data
     */
    public function __construct(
        /** @var array<int, AnalyticsReport> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
