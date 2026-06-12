<?php

namespace Inventas\AppStoreConnectKit\Api\Dto;

use Spatie\LaravelData\Data as SpatieData;

/**
 * AlternativeDistributionPackageCreateRequestData
 */
class AlternativeDistributionPackageCreateRequestData extends SpatieData
{
    public function __construct(
        public string $type,
        public AlternativeDistributionPackageCreateRequestDataRelationships $relationships,
    ) {}
}
