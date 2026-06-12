<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * BetaPublicLinkUsagesV1metricResponse
 */
class BetaPublicLinkUsagesV1metricResponse extends SpatieData
{
    /**
     * @param  array<int, BetaPublicLinkUsagesV1metricResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, BetaPublicLinkUsagesV1metricResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
