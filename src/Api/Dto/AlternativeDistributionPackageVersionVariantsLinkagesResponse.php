<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageVersionVariantsLinkagesResponse
 */
class AlternativeDistributionPackageVersionVariantsLinkagesResponse extends SpatieData
{
    /**
     * @param  array<int, AlternativeDistributionPackageVersionVariantsLinkagesResponseDataItem>  $data
     */
    public function __construct(
        /** @var array<int, AlternativeDistributionPackageVersionVariantsLinkagesResponseDataItem> */
        public array $data,
        public PagedDocumentLinks $links,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
