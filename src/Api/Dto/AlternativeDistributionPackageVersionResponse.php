<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageVersionResponse
 */
class AlternativeDistributionPackageVersionResponse extends SpatieData
{
    /**
     * @param  array<int, AlternativeDistributionPackageDelta|AlternativeDistributionPackageVariant|AlternativeDistributionPackage>|Optional  $included
     */
    public function __construct(
        public AlternativeDistributionPackageVersion $data,
        public DocumentLinks $links,
        /** @var array<int, AlternativeDistributionPackageDelta|AlternativeDistributionPackageVariant|AlternativeDistributionPackage>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
