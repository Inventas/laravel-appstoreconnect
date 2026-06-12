<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageVersionsResponse
 */
class AlternativeDistributionPackageVersionsResponse extends SpatieData
{
    /**
     * @param  array<int, AlternativeDistributionPackageVersion>  $data
     * @param  array<int, AlternativeDistributionPackageDelta|AlternativeDistributionPackageVariant|AlternativeDistributionPackage>|Optional  $included
     */
    public function __construct(
        /** @var array<int, AlternativeDistributionPackageVersion> */
        public array $data,
        public PagedDocumentLinks $links,
        /** @var array<int, AlternativeDistributionPackageDelta|AlternativeDistributionPackageVariant|AlternativeDistributionPackage>|Optional */
        public array|Optional $included = new Optional,
        public PagingInformation|Optional $meta = new Optional,
    ) {}
}
