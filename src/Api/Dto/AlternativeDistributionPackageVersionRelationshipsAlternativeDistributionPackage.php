<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageVersionRelationshipsAlternativeDistributionPackage
 */
class AlternativeDistributionPackageVersionRelationshipsAlternativeDistributionPackage extends SpatieData
{
    public function __construct(
        public AlternativeDistributionPackageVersionRelationshipsAlternativeDistributionPackageData|Optional $data = new Optional,
    ) {}
}
