<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageVersionsLinkagesResponse
 */
class AlternativeDistributionPackageVersionsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AlternativeDistributionPackageVersionsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AlternativeDistributionPackageVersionsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
