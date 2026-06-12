<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AnalyticsReportRequestResponse
 */
class AnalyticsReportRequestResponse extends SpatieData
{
    /**
     * @param  array<int, AnalyticsReport>|Optional  $included
     */
    public function __construct(
        public AnalyticsReportRequest $data,
        public DocumentLinks $links,
        /** @var array<int, AnalyticsReport>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
