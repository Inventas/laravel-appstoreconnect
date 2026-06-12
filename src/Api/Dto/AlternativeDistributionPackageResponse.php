<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageResponse
 */
class AlternativeDistributionPackageResponse extends SpatieData
{
    /**
     * @param  array<int, AlternativeDistributionPackageVersion>|Optional  $included
     */
    public function __construct(
        public AlternativeDistributionPackage $data,
        public DocumentLinks $links,
        /** @var array<int, AlternativeDistributionPackageVersion>|Optional */
        public array|Optional $included = new Optional,
    ) {}
}
