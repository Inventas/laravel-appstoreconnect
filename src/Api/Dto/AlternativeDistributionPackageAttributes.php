<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageAttributes
 */
class AlternativeDistributionPackageAttributes extends SpatieData
{
    public function __construct(
        public Checksums|Optional $sourceFileChecksum = new Optional,
    ) {}
}
