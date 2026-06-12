<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaTesterUsagesV1metricResponse
 */
class BetaTesterUsagesV1metricResponse extends SpatieData
{
    /**
     * @param  array<int, BetaTesterUsagesV1metricResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BetaTesterUsagesV1metricResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
