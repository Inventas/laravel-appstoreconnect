<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AppsBetaTesterUsagesV1metricResponse
 */
class AppsBetaTesterUsagesV1metricResponse extends SpatieData
{
    /**
     * @param  array<int, AppsBetaTesterUsagesV1metricResponseDataItem>  $data
     * @param  array<int, BetaTester>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AppsBetaTesterUsagesV1metricResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
        /** @var array<int, BetaTester>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
