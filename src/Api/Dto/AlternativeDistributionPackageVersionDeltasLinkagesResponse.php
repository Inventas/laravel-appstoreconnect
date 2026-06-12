<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageVersionDeltasLinkagesResponse
 */
class AlternativeDistributionPackageVersionDeltasLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AlternativeDistributionPackageVersionDeltasLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AlternativeDistributionPackageVersionDeltasLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
