<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageRelationships
 */
class AlternativeDistributionPackageRelationships extends SpatieData
{
    public function __construct(
        public AlternativeDistributionPackageRelationshipsVersions|Optional $versions = new Optional,
    ) {}
}
