<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageVersionRelationships
 */
class AlternativeDistributionPackageVersionRelationships extends SpatieData
{
    public function __construct(
        public AlternativeDistributionPackageVersionRelationshipsVariants|Optional $variants = new Optional,
        public AlternativeDistributionPackageVersionRelationshipsDeltas|Optional $deltas = new Optional,
        public AlternativeDistributionPackageVersionRelationshipsAlternativeDistributionPackage|Optional $alternativeDistributionPackage = new Optional,
    ) {}
}
