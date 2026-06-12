<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;
use Spatie\LaravelData\Optional;

/**
 * AlternativeDistributionPackageVersion
 */
class AlternativeDistributionPackageVersion extends SpatieData
{
    public function __construct(
        public string $type,
        public string $id,
        public AlternativeDistributionPackageVersionAttributes|Optional $attributes = new Optional,
        public AlternativeDistributionPackageVersionRelationships|Optional $relationships = new Optional,
        public ResourceLinks|Optional $links = new Optional,
    ) {}
}
